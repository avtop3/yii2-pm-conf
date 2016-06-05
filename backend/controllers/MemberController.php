<?php

namespace backend\controllers;

use Yii;
use common\models\Member;
use common\models\MemberSearch;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;
use yii\web\Session;
use yii\web\UrlManager;
use backend\models\ConfPeriod;


/**
 * MemberController implements the CRUD actions for Member model.
 */
class MemberController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Member models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Member model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->request->post()) {
            $model = $this->findModel($id);
            $messages[] = Yii::$app->mailer->compose('member-info', ['model' => $model])
                ->setFrom(Yii::$app->params['smtpEmail'])
                ->setTo([$model->email])
                ->setSubject(Yii::t('app.member.mail', 'Integrated Management 2017: Confirmation of Registration'));

            $messages[] = Yii::$app->mailer->compose('member-info', ['model' => $model])
                ->setFrom(Yii::$app->params['smtpEmail'])
                ->setTo(['pm.education.khpi@gmail.com'])//'pm.education.khpi@gmail.com',
                ->setSubject(Yii::t('app.member.mail', 'Integrated Management 2017: Confirmation of Registration'));

            Yii::$app->mailer->sendMultiple($messages);
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Member model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Member();

        if ($model->load(Yii::$app->request->post()) && $model->save()) { //&& $model->save()
//            print_r($model->attributes);
//            exit();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Member model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = Member::SCENARIO_ADMIN;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Member model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionOrg($period = null)
    {
        $period = (int)$period;
//        $searchModel = new MemberSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        $dataProvider->pagination->pageSize = 0;
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
        $query = Member::find()->addGroupBy('organisationTitle');

        if (is_integer($period)) {

            $confPeriod = ConfPeriod::findOne($period);
            if ($confPeriod) {
//                var_dump($period); exit;

                $query->andFilterWhere(['between', 'created_at', $confPeriod->regStart, $confPeriod->regEnd]);
            }
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 0,
            ],
        ]);

        return $this->render('org', ['dataProvider' => $dataProvider]);
    }

    public function actionBulkEmail()
    {
        if (Yii::$app->request->method == 'POST' && Yii::$app->request->post('selection')) {

            $viewMail = Yii::$app->request->post('view');
            $usersObjs = Member::find()->where(['id' => Yii::$app->request->post('selection')])->all();
            $pathPrefix = Yii::getAlias('@public/documents/');
            $fileName = 'information_page.pdf';

            $messages = [];
            foreach ($usersObjs as $user) {
                $lang = $user->getNativeLanguage();

                $currentMessage = Yii::$app->mailer->compose($viewMail, ['model' => $user])
                    ->setFrom(Yii::$app->params['smtpEmail'])
                    ->setTo($user->email);

                if ($viewMail == 'member-invite') {
                    switch ($lang) {
                        case 'uk-UA':
                            $subjectMail = 'Integrated Management 2017: Запрошення до участі у конференції';
                            $currentMessage->attach($pathPrefix . 'ua/' . $fileName, ['contentType' => 'application/pdf']);
                            break;
                        case 'ru-RU':
                            $subjectMail = 'Integrated Management 2017: Приглашение к участию в конференции';
                            $currentMessage->attach($pathPrefix . 'ru/' . $fileName, ['contentType' => 'application/pdf']);
                            break;
                        default:
                            $currentMessage->attach($pathPrefix . 'en/' . $fileName, ['contentType' => 'application/pdf']);
                            $subjectMail = 'Integrated Management 2017: Invitation for Participation';
                    }
                } else {
                    switch ($lang) {
                        case 'uk-UA':
                            $subjectMail = 'Міжнародна науково-практична конференція Integrated Management 2017';
                            break;
                        case 'ru-RU':
                            $subjectMail = 'Международная научно-практическая конференция Integrated Management 2017';
                            break;
                        default:
                            $subjectMail = 'International Scientific and Practical Conference «Integrated Management 2017»';
                    }
                }
                $currentMessage->setSubject(Yii::t('app.member.mail', $subjectMail));
                $messages[] = $currentMessage;
            }
            $sendNumber = Yii::$app->mailer->sendMultiple($messages);
            Yii::$app->session->addFlash('success', 'Письмо(а) успешно отправлены к (' . $sendNumber . ') участникам');

//            print_r($usersObjs);

//            exit;
            return $this->redirect('bulk-email');
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Member::find(),
            'pagination' => [
                'pageSize' => 0,
            ],
        ]);

        return $this->render('bulk-email', ['dataProvider' => $dataProvider]);
    }

    /**
     * Finds the Member model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Member the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

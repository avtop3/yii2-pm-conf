<?php

namespace frontend\controllers;

use Yii;
use common\models\Member;
use common\models\MemberSearch;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MemberController implements the CRUD actions for Member model.
 */
class MemberController extends Controller
{
    public $defaultAction = 'create';

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
     * Creates a new Member model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Member();
        if ($model->load(Yii::$app->request->post()) && $model->agreement) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Success!'));

                $messages[] = Yii::$app->mailer->compose('member-info', ['model' => $model])
                    ->setFrom(Yii::$app->params['smtpEmail'])
                    ->setTo([$model->email])
                    ->setSubject(Yii::t('app.member.mail', 'Integrated Management 2017: Confirmation of Registration'));

                $messages[] = Yii::$app->mailer->compose('member-info', ['model' => $model])
                    ->setFrom(Yii::$app->params['smtpEmail'])
                    ->setTo(['pm.education.khpi@gmail.com'])//'pm.education.khpi@gmail.com',
                    ->setSubject(Yii::t('app.member.mail', 'Integrated Management 2017: Confirmation of Registration'));

                Yii::$app->mailer->sendMultiple($messages);

                return $this->redirect(Url::home());
            }
        } else {
            Yii::$app->session->setFlash('warning', Yii::t('app', 'Please, accept rules about processing of your personal data '));
        }

        return $this->render('create', [
            'model' => $model,
        ]);
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

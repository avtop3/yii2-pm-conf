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
        if ($model->load(Yii::$app->request->post()) && $model->save()) { //&& $model->save()
            Yii::$app->session->setFlash('success', Yii::t('app', 'Success!'));

//            Yii::$app->mailer->compose('member-info', ['model' => $model])
//                ->setFrom(Yii::$app->params['smtpEmail'])
//                ->setTo([$model->email, 'pm.education.khpi@gmail.com', 'ajiekcahdp3@yandex.ru'])
//                ->setSubject(Yii::t('app.member.mail', 'Integrated Management 2017: Confirmation of Registration'))
//                ->send();

            return $this->redirect(Url::home());
        } else {
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

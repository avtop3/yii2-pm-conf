<?php
namespace backend\controllers;

use common\models\ResetPassword;
use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
//        $user = User::findByUsername('admin');
////        print_r($user); exit;
//        $user->setPassword('admin');
//        $user->save();
//        print_r($user); exit;


        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionResetPassword()
    {
        $model = new ResetPassword();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->getUser()->identity->setPassword($model->newPassword);
            Yii::$app->getUser()->identity->save();
            return $this->goHome();
        } else {
            return $this->render('resetPassword', [
                'model' => $model,
            ]);
        }
    }
}

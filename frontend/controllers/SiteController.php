<?php
namespace frontend\controllers;

use pendalf89\blog\models\Post;
use pendalf89\blog\models\PostQuery;
use Yii;
use frontend\models\ContactForm;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionStaticPage($page)
    {
         return $this->render(Yii::$app->language . DIRECTORY_SEPARATOR . $page);
    }
}

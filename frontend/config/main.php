<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

//print_r($params); exit;

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'sourceLanguage' => $params['activeLanguages']['ru'],
    'language' => $params['activeLanguages']['ru'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'css' => ['css/bootstrap.min.css'],
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',

            // List all supported languages here
            // Make sure, you include your app's default language.
            'languages' => $params['activeLanguages'],
            'rules' => [
                [
                    'pattern' => '',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'index'],
                ],
                [
                    'pattern' => 'about',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'about'],
                ],
                [
                    'pattern' => 'location',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'location'],
                ],
                [
                    'pattern' => 'speakers',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'speakers'],
                ],
                [
                    'pattern' => 'conditions',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'conditions'],
                ],
                [
                    'pattern' => 'program',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'program'],
                ],
                [
                    'pattern' => 'articles',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'articles'],
                ],
                [
                    'pattern' => 'contact-us',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'contact-us'],
                ],
                'registration' => 'member/create'
            ],
        ]
    ],
    'params' => $params,
];

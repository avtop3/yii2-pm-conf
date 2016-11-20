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
                'registration' => 'member/create',
                [
                    'pattern' => '',
                    'route' => 'site/static-page',
                    'defaults' => ['page' => 'index'],
                ],
                [
                    'pattern' => '/<year:[0-9]{4}>',
                    'route' => 'archive-by-year/show',
                ],
                [
                    'pattern' => '/<page:[a-z0-9-_]+>',
                    'route' => 'site/static-page',
                ],

            ],
        ]
    ],
    'modules' => [
        'api' =>[
            'class' => 'frontend\modules\api\ApiModule',
        ]
    ],
    'params' => $params,
];

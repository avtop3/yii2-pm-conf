<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language' => 'ru-Ua',
    'bootstrap' => ['log'],
    'modules' => [
        'blog' => [
            'class' => 'pendalf89\blog\Module',
            // This option automatically translit entered titles
            // from russian symbols to english on fly. Default false.
            'autoTranslit' => true,
            // Some options for CKEditor. Default custom options.
            'editorOptions' => [],
            // callback function for create post view url. Have $model argument.
            'viewPostUrlCallback' => function($model) {
                return '/' . $model->alias;
            },
        ],
    ],
    'components' => [
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
        'formatter'=>[
            'locale' => 'ru-UA',
        ]

    ],
    'params' => $params,
];

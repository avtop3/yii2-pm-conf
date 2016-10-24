<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'sourceLanguage' => 'en-US',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManagerFrontEnd' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => 'http://conf.pm-edu.org',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => [],
        ],
        'urlManagerBackEnd' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => 'http://conf.pm-edu.org/yii2-admin',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => [],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'pm.khpi@gmail.com',
                'password' => 'IF22Bondar',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'db' => 'db',
                    'sourceLanguage' => 'en-US', // Developer language
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                    'forceTranslation' => true,
                    'cachingDuration' => 86400,
                    'enableCaching' => false,
                ],
                'app*' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'db' => 'db',
                    'sourceLanguage' => 'en-US', // Developer language
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable' => '{{%language_translate}}',
                    'forceTranslation' => true,
                    'cachingDuration' => 86400,
                    'enableCaching' => false,
                ],
            ],
        ],
    ],
    'modules' => [
        'translatemanager' => [
            'class' => 'lajax\translatemanager\Module',
            'ignoredCategories' => ['yii', 'array', 'language', 'model'],
            'layout' => NULL,
            'allowedIPs' => ['*'],
        ],
    ],

];

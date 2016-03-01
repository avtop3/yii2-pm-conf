<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

$this->registerLinkTag([
    'rel' => 'shortcut icon',
    'href' => '/favicon.ico?v=3',
    'type' => 'image/x-icon']);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Сайт Конференций',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?php
                $menuItems = [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => Yii::t('language', 'Members'), 'url' => ['/member/index']],
                    ['label' => Yii::t('language', 'Yii2 - Translate Manager'),
                        'items' => [
                            ['label' => Yii::t('language', 'List of languages'), 'url' => ['/translatemanager/language/list']],
//                            ['label' => Yii::t('language', 'Create'), 'url' => ['/translatemanager/language/create']],
                            ['label' => Yii::t('language', 'Scan'), 'url' => ['/translatemanager/language/scan']],
                            ['label' => Yii::t('language', 'Optimize'), 'url' => ['/translatemanager/language/optimizer']],
//                            ['label' => Yii::t('language', 'Import'), 'url' => ['/translatemanager/language/import']],
//                            ['label' => Yii::t('language', 'Export'), 'url' => ['/translatemanager/language/export']],
                        ]
                    ],

                ];
                echo Nav::widget([
                    'options' => ['class' => 'nav-sidebar'],
                    'items' => $menuItems,
                ]); ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

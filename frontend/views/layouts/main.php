<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$this->registerLinkTag([
        'rel' => 'shortcut icon',
        'href' => '/favicon.ico?v=2',
        'type' => 'image/x-icon']
);

$this->registerMetaTag([
    'name' => 'theme-color',
    'content' => '#228B22',
]);


AppAsset::register($this);
\rmrevin\yii\fontawesome\cdn\AssetBundle::register($this);

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
<body <?= isset($this->params['bodyClass']) ? 'class="' . $this->params['bodyClass'] . '"' : null ?> >
<?php $this->beginBody() ?>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <a class="navbar-brand" href="<?= \yii\helpers\Url::home() ?>"><img
                                src="/markup/images/logo.png" alt="logo"></a>
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-xs-4">

                    <?php

                    $langMenuItems = [
                        [
                            'label' => Yii::t('app', 'English'),
                            'url' => \yii\helpers\Url::current(['language' => 'en']),
                            'active' => Yii::$app->language === 'en-US',
                        ],
                        [
                            'label' => Yii::t('app', 'Ukrainian'),
                            'url' => \yii\helpers\Url::current(['language' => 'uk']),
                            'active' => Yii::$app->language === 'uk-UA'
                        ],
                        [
                            'label' => Yii::t('app', 'Russian'),
                            'url' => \yii\helpers\Url::current(['language' => 'ru']),
                            'active' => Yii::$app->language == 'ru-RU',
                        ],
                    ];
                    Nav::widget([
                        'options' => ['class' => 'list-inline'],
                        'items' => $langMenuItems,
                    ]);

                    echo \yii\widgets\Menu::widget([
                        'options' => ['class' => 'list-inline pull-right', 'id' => 'language-selector'],
                        'items' => $langMenuItems,
                    ]);

                    echo Yii::$app->language;

                    ?>
                    <!--                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +0123 456 70 90</p></div>-->
                </div>

            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.top-bar-->


    <?php
    NavBar::begin(
        [
//            'brandLabel' => '<img src="/images/logo.png" alt="logo">',
//            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-inverse',
            ],
        ]);
    $menuItems = [
        ['label' => Yii::t('app', 'Home'), 'url' => ['/']],
        ['label' => 'About', 'url' => ['/site/static-page', 'page' => 'about']],
        ['label' => 'Location', 'url' => ['/site/static-page', 'page' => 'location']],
        ['label' => 'Speakers', 'url' => ['/site/static-page', 'page' => 'speakers']],
        ['label' => Yii::t('app', 'Registration'), 'url' => ['/member/create']],
        ['label' => 'Conditions', 'url' => ['/site/static-page', 'page' => 'conditions']],
        ['label' => 'Program', 'url' => ['/site/static-page', 'page' => 'program']],
        ['label' => 'Articles', 'url' => ['/site/static-page', 'page' => 'articles']],
        ['label' => 'Contact us', 'url' => ['/site/static-page', 'page' => 'contact-us']],
        ['label' => 'Archives', 'url' => ['/site/static-page', 'page' => 'articles']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


</header>
<?php //echo Breadcrumbs::widget([
//    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//])
?>
<div class="container">
    <?= Alert::widget() ?>
</div>
<?= $content ?>

<!--/#bottom-->
<div id="regLink">
    <div class="img-left">
        <img src="/markup/images/arrow_up_1.png" alt="">
    </div>
    <a href="<?= \yii\helpers\Url::to(['/member/create'])?>"><?= Yii::t('app.layout', 'Registration') ?></a>
    <div class="img-right">
        <img src="/markup/images/arrow_up_1.png" alt="">
    </div>
    <p><?= Yii::t('app.layout', 'Participation fee <br>350 uah') ?></p>
</div>


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-left">Кафедра Стратегического Управления НТУ "ХПИ". Все права защищены &copy; 2016 Харьков, Украина</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

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
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-xs-4">

                    <?php

                    $langMenuItems = [
                        [
                            'label' => Yii::t('app', 'En'),
                            'url' => \yii\helpers\Url::current(['language' => 'en']),
                            'active' => Yii::$app->language === 'en-US',
                        ],
                        [
                            'label' => Yii::t('app', 'Uk'),
                            'url' => \yii\helpers\Url::current(['language' => 'uk']),
                            'active' => Yii::$app->language === 'uk-UA'
                        ],
                        [
                            'label' => Yii::t('app', 'Ru'),
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
        ['label' => Yii::t('app.menu', 'Home'), 'url' => ['/site/static-page', 'page' => 'index']],
        ['label' => Yii::t('app.menu', 'About'), 'url' => ['/site/static-page', 'page' => 'about']],
        ['label' => Yii::t('app.menu', 'Venue'), 'url' => ['/site/static-page', 'page' => 'location']],
        ['label' => Yii::t('app.menu', 'Speakers'), 'url' => ['/site/static-page', 'page' => 'speakers']],
        ['label' => Yii::t('app', 'Registration'), 'url' => ['/member/create']],
        ['label' => Yii::t('app.menu', 'Conditions'), 'url' => ['/site/static-page', 'page' => 'conditions']],
        ['label' => Yii::t('app.menu', 'Program'), 'url' => ['/site/static-page', 'page' => 'program']],
        ['label' => Yii::t('app.menu', 'Articles'), 'url' => ['/site/static-page', 'page' => 'articles']],
        ['label' => Yii::t('app.menu', 'Contact us'), 'url' => ['/site/static-page', 'page' => 'contact-us']],
        ['label' => Yii::t('app.menu', 'Archives'), 'url' => ['/site/static-page', 'page' => 'articles']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
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
        <p><?= Yii::t('app.layout', 'Стоимость участия<br>350 грн.') ?></p>
        <div class="img-left">
            <img src="/markup/images/arrow_up_1.png" alt="">
        </div>          
        <a href="<?= \yii\helpers\Url::to(['/member/create']) ?>"><?= Yii::t('app.layout', 'Регистрация') ?></a>
        <div class="img-right">
            <img src="/markup/images/arrow_up_1.png" alt="">
        </div>
    </div>
    <footer id="footer" class="midnight-blue">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-left"><?= Yii::t('app', 'Кафедра Стратегического Управления НТУ "ХПИ". Все права защищены &copy; 2016 Харьков, Украина') ?></p>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

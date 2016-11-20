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

$this->registerMetaTag([
    'name' => 'generator',
    'content' => 'Strategic Management Department, NTU "KhPI". All rights reserved © 2016 Kharkiv, Ukraine'
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
    <link href="/markup/css/flexslider.css" rel="stylesheet">   
    <link href="/markup/css/countdown.css" rel="stylesheet">   
    <link href="/markup/css/jquery.fancybox-buttons.css?v=1.0.5" rel="stylesheet">   
    <link href="/markup/css/jquery.fancybox-thumbs.css?v=1.0.7" rel="stylesheet">     
    <link href="/markup/css/jquery.fancybox.css" rel="stylesheet">  
</head>
<body <?= isset($this->params['bodyClass']) ? 'class="' . $this->params['bodyClass'] . '"' : null ?> >
<?php $this->beginBody() ?>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <div class="social">
                        <a class="navbar-brand" href="<?= \yii\helpers\Url::home() ?>"><img
                            src="/markup/images/logo.png" alt="logo"></a>
                    </div>
                </div>                
                <div class="pluso-engine col-sm-4 col-xs-4" pluso-sharer={"buttons":"facebook,linkedin,vkontakte,twitter,google","style":{"size":"medium","shape":"square","theme":"theme12"},"orientation":"horizontal","multiline":false}  data-url="https%3A%2F%2Fconf.pm-edu.org%2F"></div> 
                <div class="col-sm-2 col-xs-2">                    
                    <?php

                    $langMenuItems = [
                        [
                            'label' => Yii::t('app', 'EN'),
                            'url' => \yii\helpers\Url::current(['language' => 'en']),
                            'active' => Yii::$app->language === 'en-US',
                        ],
                        [
                            'label' => Yii::t('app', 'UA'),
                            'url' => \yii\helpers\Url::current(['language' => 'uk']),
                            'active' => Yii::$app->language === 'uk-UA'
                        ],
                        [
                            'label' => Yii::t('app', 'RU'),
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
        ['label' => Yii::t('app.menu', 'Archives'), 'url' => ['/site/static-page', 'page' => 'archive']],
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
    <p><?= Yii::t('app.layout', 'Participation fee <br>400 uah') ?></p>

    <div class="img-left">
        <img src="/markup/images/arrow_up_1.png" alt="">
    </div>
    <a href="<?= \yii\helpers\Url::to(['/member/create']) ?>"><?= Yii::t('app.layout', 'Registration') ?></a>

    <div class="img-right">
        <img src="/markup/images/arrow_up_1.png" alt="">
    </div>
</div>
<footer id="footer" class="midnight-blue">
    <hr>
    <?php
    NavBar::begin(
        [
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
        ['label' => Yii::t('app.menu', 'Archives'), 'url' => ['/site/static-page', 'page' => 'archive']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-left"><?= Yii::t('app.layout', 'Strategic Management Department, NTU "KhPI". All rights reserved © {year} Kharkiv, Ukraine', ['year' => date('Y')]) ?></p>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->
<?php $this->endBody() ?>
<script src="/markup/js/jquery.flexslider.js"></script>
<script src="/markup/js/jquery.countdown.min.js"></script>
<script src="/markup/js/jquery.fancybox.js"></script>
<script src="/markup/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script src="/markup/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">(function() {
    if (window.pluso) {return};
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://x.pluso.ru/pluso-x.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
})();
</script>
<script type="text/javascript">
    setTimeout(function(){
        $( document ).ready(function() {
            $('#main-slider .next').click();
        });        
    }, 6000);
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var baseUrl = 'api/file/images';                
        $("a[data-folder-name]").click(function() {
            $.ajax({
                type: 'get',
                url: baseUrl,
                data: {
                    subFolder: $(this).data('folder-name')
                },
                success: function(data){
                    var result = data.map(function(item){                            
                        return item.path;
                    });                        
                    console.log(result);
                    $.fancybox.open(result);
                }
            })
        });
    });
</script>
<script>    
    //Counter for main slider
    $('#sliderCount, #sliderCountUA, #sliderCountEN').countdown('2017/02/13').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime(        
            '<div class="count"><div class="num">%-D</div> <p class="string"> days </p></div>'
            + '<div class="count"><div class="num">%-H</div> <p class="string"> hours </p></div>'
            + '<div class="count"><div class="num">%-M</div> <p class="string"> min </p></div>'
            + '<div class="count"><div class="num">%-S</div> <p class="string"> sec </p></div>'));
    });
    
    //Counter for registration time in RU UA EN
    $('#clock, #clockUA, #clockEN').countdown('2017/02/13').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime(        
        '%D <span class="string"> days </span> ' + ' '
            + '%H <span class="string"> hours </span>' + ' '
            + '%M <span class="string"> min </span>  ' + ' '
            + '%S <span class="string"> sec </span>'));
    });
    
    // Counters for key dates
    $('#registrEnd, #registrEndUA, #registrEndEN').countdown('2017/01/20').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime(        
            '<div class="count"> <div class="num">%-D</div> <p class="string"> days </p></div>'
            + '<div class="count"><div class="num">%-H</div> <p class="string"> hours </p></div>'
            + '<div class="count"><div class="num">%-M</div> <p class="string"> min </p></div>'
            + '<div class="count"><div class="num">%-S</div> <p class="string"> sec </p></div>'));
    });
    $('#articleEnd, #articleEndUA, #articleEndEN').countdown('2016/12/10').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime(        
            '<div class="count"> <div class="num">%-D</div> <p class="string"> days </p></div>'
            + '<div class="count"><div class="num">%-H</div> <p class="string"> hours </p></div>'
            + '<div class="count"><div class="num">%-M</div> <p class="string"> min </p></div>'
            + '<div class="count"><div class="num">%-S</div> <p class="string"> sec </p></div>'));
    });
    
</script>
</body>   
</html>
<?php $this->endPage() ?>

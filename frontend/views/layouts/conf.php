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
    'href' => '@web/favicon.ico?v=1',
    'type' => 'image/x-icon']);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru"
      lang="<?= Yii::$app->language ?>">
<head>
    <base href="http://local.conf/ru/program"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="http://local.conf/ru/program" rel="alternate" hreflang="ru-RU"/>
    <link href="http://local.conf/ua/program" rel="alternate" hreflang="uk-UA"/>
    <link href="http://local.conf/en/conference-subjects" rel="alternate" hreflang="en-GB"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/k2.css" type="text/css"/>
    <link rel="stylesheet" href="http://local.conf/media/ext_tss/assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/system/css/system.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/system/css/general.css" type="text/css"/>
    <link rel="stylesheet" href="/plugins/system/helix/css/media_queries.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/template.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/joomla.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/custom.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/modules.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/typography.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/css3.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/styles/style3.css" type="text/css"/>
    <link rel="stylesheet" href="/templates/shaper_event/css/menu.css" type="text/css"/>
    <link rel="stylesheet" href="/modules/mod_news_show_sp2/assets/css/mod_news_show_sp2.css" type="text/css"/>
    <link rel="stylesheet" href="/media/mod_languages/css/template.css" type="text/css"/>
    <style type="text/css">
        .sp-wrap {
            width: 960px;
        }

        #sp-leftcol {
            width: 30%
        }

        #sp-rightcol {
            width: 30%
        }

        #sp-maincol {
            width: 100%
        }

        #inner_content {
            width: 100%;
        }

        #sp-inset1 {
            width: 25%
        }

        #sp-inset2 {
            width: 25%
        }
    </style>
    <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
    <script src="/media/system/js/core.js" type="text/javascript"></script>
    <script src="/media/jui/js/jquery.min.js" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/components/com_k2/js/k2.js?v2.6.8&amp;sitepath=/" type="text/javascript"></script>
    <script src="http://local.conf/media/ext_tss/assets/js/script.js" type="text/javascript"></script>
    <script src="/templates/shaper_event/js/tools.js" type="text/javascript"></script>
    <script src="/plugins/system/helix/js/menu.js" type="text/javascript"></script>
    <script src="/templates/shaper_event/js/totop.js" type="text/javascript"></script>
    <script src="/media/system/js/mootools-more.js" type="text/javascript"></script>
    <link href="/templates/shaper_event/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/templates/shaper_event/css/tabs.css"/>
    <?php $this->head() ?>
</head>
<body class="bg ltr style3 clearfix">
<?php $this->beginBody() ?>
<div id="header-wrapper" class="clearfix">
<div class="sp-wrap">
<div id="header" class="clearfix">
<div id="sp-share" class="clearfix">
    <div class="sp-inner clearfix">
        <div class="mod-languages">


            <ul class="lang-inline">
                <li class="" dir="ltr">
                    <a href="/ua/program">
                        <img src="/media/mod_languages/images/uk_ua.gif" alt="Український"
                             title="Український"/> </a>
                </li>
                <li class="lang-active" dir="ltr">
                    <a href="http://local.conf/ru/program">
                        <img src="/media/mod_languages/images/ru.gif" alt="Русский" title="Русский"/> </a>
                </li>
                <li class="" dir="ltr">
                    <a href="/en/conference-subjects">
                        <img src="/media/mod_languages/images/en.gif" alt="English (UK)"
                             title="English (UK)"/> </a>
                </li>
            </ul>

        </div>
    </div>
</div>
<div id="hornav-wrapper" class="clearfix">
    <div style="display:none;">
        <div class="clr"></div>
        <div id="hornav" class="clearfix">
            <ul class="sp-menu level-0">
                <li class="menu-item first"><a href="/ru/" class="menu-item first"><span class="menu"><span
                                class="menu-title">Главная</span></span></a></li>
                <li class="menu-item"><a href="/ru/info" class="menu-item"><span class="menu"><span
                                class="menu-title">О конференеции</span></span></a></li>
                <li class="menu-item"><a href="/ru/spikeri" class="menu-item"><span class="menu"><span
                                class="menu-title">Спикеры</span></span></a></li>
                <li class="menu-item parent"><a href="/ru/registration" class="menu-item parent"><span
                            class="menu"><span class="menu-title">Регистрация</span></span></a>

                    <div class="submenu">
                        <div class="submenu-wrap">
                            <div class="menu-tl">
                                <div class="menu-tr">
                                    <div class="menu-tm"></div>
                                </div>
                            </div>
                            <div class="menu-l">
                                <div class="menu-r">
                                    <div class="submenu-inner clearfix" style="width: 220px;">
                                        <div class="megacol col1 first" style="width: 220px;">
                                            <ul class="sp-menu level-1">
                                                <li class="menu-item first"><a
                                                        href="/ru/registration/zayavka"
                                                        class="menu-item first"><span class="menu"><span
                                                                class="menu-title">Участие с публикацией</span></span></a>
                                                </li>
                                                <li class="menu-item"><a href="/ru/registration/zayavka-bez"
                                                                         class="menu-item"><span
                                                            class="menu"><span
                                                                class="menu-title">Участие без публикации</span></span></a>
                                                </li>
                                                <li class="menu-item last"><a href="/ru/registration/docs"
                                                                              class="menu-item last"><span
                                                            class="menu"><span
                                                                class="menu-title">Загрузка документов</span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-bl">
                                <div class="menu-br">
                                    <div class="menu-bm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item active"><a href="/ru/program" class="menu-item active"><span
                            class="menu"><span class="menu-title">Программа</span></span></a></li>
                <li class="menu-item"><a href="/ru/dokladchikam" class="menu-item"><span class="menu"><span
                                class="menu-title">Подача статей</span></span></a></li>
                <li class="menu-item"><a href="/ru/contacts" class="menu-item"><span class="menu"><span
                                class="menu-title">Контакты</span></span></a></li>
                <li class="menu-item last"><a href="/ru/archive" class="menu-item last"><span
                            class="menu"><span class="menu-title">Архив</span></span></a></li>
            </ul>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            window.addEvent('domready', function () {
                var limits = $(document.body);
                items_v = [], items_h = [];

                $$('div.submenu').each(function (el) {
                    if (el.getParent().getParent().hasClass('level-0')) {
                        items_v.push(el);
                    } else {
                        items_h.push(el);
                    }
                });

                new SPMenu(items_v, {
                    direction: 'LTR',
                    bound: limits,
                    fxOptions: {
                        transition: Fx.Transitions.linear,
                        duration: 300
                    },
                    animation: 'slidefade',
                    mode: 'vertical',
                    offset: {x: 0, y: 0}
                });

                new SPMenu(items_h, {
                    direction: 'LTR',
                    bound: limits,
                    fxOptions: {
                        transition: Fx.Transitions.linear,
                        duration: 300
                    },
                    animation: 'slidefade',
                    mode: 'horizontal',
                    offset: {x: 0, y: 0}
                });
            });
            //]]>
        </script>
    </div>
    <div id="sp-menu" class="clearfix">
        <div class="sp-inner clearfix">

            <div class="clr"></div>
            <div id="hornav" class="clearfix">


                <ul class="sp-menu level-0">
                    <li class="menu-item item-435"><a href="/ru/" class="menu-item first"><span
                                class="menu"><span class="menu-title">Главная</span></span></a></li>
                    <li class="menu-item item-605"><a href="/ru/info" class="menu-item first"><span
                                class="menu"><span class="menu-title">О конференеции</span></span></a></li>
                    <li class="menu-item item-683"><a href="/ru/spikeri" class="menu-item first"><span
                                class="menu"><span class="menu-title">Спикеры</span></span></a></li>
                    <li class="menu-item item-611 deeper parent"><a href="/ru/registration"
                                                                    class="menu-item first"><span
                                class="menu"><span class="menu-title">Регистрация</span></span></a>

                        <div class="submenu">
                            <div class="submenu-wrap">
                                <div class="menu-tl">
                                    <div class="menu-tr">
                                        <div class="menu-tm"></div>
                                    </div>
                                </div>
                                <div class="menu-l">
                                    <div class="menu-r">
                                        <div class="submenu-inner clearfix" style="width: 187px;">
                                            <div class="megacol col1 first" style="width: 220px;">
                                                <ul class="sp-menu level-1">
                                                    <li class="menu-item item-676"><a
                                                            href="/ru/registration/zayavka"
                                                            class="menu-item first"><span class="menu"><span
                                                                    class="menu-title">Участие с публикацией</span></span></a>
                                                    </li>
                                                    <li class="menu-item item-678"><a
                                                            href="/ru/registration/zayavka-bez"
                                                            class="menu-item first"><span class="menu"><span
                                                                    class="menu-title">Участие без публикации</span></span></a>
                                                    </li>
                                                    <li class="menu-item item-679"><a
                                                            href="/ru/registration/docs"
                                                            class="menu-item first"><span class="menu"><span
                                                                    class="menu-title">Загрузка документов</span></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="menu-bl">
                                            <div class="menu-br">
                                                <div class="menu-bm"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item item-636 current active"><a href="/ru/program"
                                                                     class="menu-item first"><span
                                class="menu"><span class="menu-title">Программа</span></span></a></li>
                    <li class="menu-item item-612"><a href="/ru/dokladchikam" class="menu-item first"><span
                                class="menu"><span class="menu-title">Подача статей</span></span></a></li>
                    <li class="menu-item item-613"><a href="/ru/contacts" class="menu-item first"><span
                                class="menu"><span class="menu-title">Контакты</span></span></a></li>
                    <li class="menu-item item-610"><a href="/ru/archive" class="menu-item first"><span
                                class="menu"><span class="menu-title">Архив</span></span></a></li>
                </ul>

            </div>


        </div>
    </div>
</div>
</div>
</div>
</div>


<div class="sp-wrap  clearfix">
    <div id="sp-maincol" class="clearfix">
        <div class="clr"></div>
        <div id="inner_content" class="clearfix"> <!--Component Area-->

            <div class="sp-component-area clearfix">
                <div class="sp-inner clearfix">
                    <div id="sp-pathway" class="clearfix">
                        <div class="sp-inner clearfix"><span class="breadcrumbs">
		<a href="/ru/">Главная</a><span class="current">Программа</span></span>
                        </div>
                    </div>
                    <div id="system-message-container">
                    </div>

                    <div class="sp-component-area-inner clearfix">
                        <div class="item-page clearfix">

                            <div class="clr"></div>

                            <div class="sp-item-fulltext clearfix">


                                <div class="article-tools clearfix">
                                    <!--End Date-->
                                    <div class="article-info-wrapper"><!--Start Article title and tool-->

                                        <h1>
                                            <a href="/ru/program"><?= Html::encode($this->title) ?></a>
                                        </h1>
                                        <dl class="article-info"></dl>
                                    </div>
                                    <!--End article tools-->
                                </div>
                                <!--Image-->
                                <!--End Image-->
                                <?= Alert::widget() ?>
                                <?= $content ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>

<div id="sp-footer-grid" class="clearfix">
    <div class="sp-wrap clearfix">
        <div id="sp-sponsor" class="clearfix">
            <div class="sp-inner clearfix">
                <div id="ns2-127" class="nssp2 ns2-sponsor">
                    <div class="ns2-wrap">
                        <div class="ns2-art-wrap  ">
                            <div class="ns2-art-pages">
                                <div class="ns2-page">
                                    <div class="ns2-page-inner">
                                        <div class="ns2-row ns2-first ns2-odd">
                                            <div class="ns2-row-inner">
                                                <div class="ns2-column flt-left col-4">
                                                    <div style="padding:0">
                                                        <div class="ns2-inner">


                                                            <a href="/ru/program/79-rucont/sponsors/84-spon1">

                                                                <img class="ns2-image" style="float:none;margin:0 5 0 5"
                                                                     src="/cache/mod_news_show_sp2/nssp2_thumbs/sponsor/org_hpi.jpg"
                                                                     alt="НТУ &quot;ХПИ&quot;"
                                                                     title="НТУ &quot;ХПИ&quot;"/>

                                                            </a>


                                                            <div class="ns2-social">
                                                            </div>


                                                            <div style="clear:both"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ns2-column flt-left col-4">
                                                    <div style="padding:0">
                                                        <div class="ns2-inner">


                                                            <a href="/ru/program/79-rucont/sponsors/83-sponsor4">

                                                                <img class="ns2-image" style="float:none;margin:0 5 0 5"
                                                                     src="/cache/mod_news_show_sp2/nssp2_thumbs/sponsor/org_lnau.jpg"
                                                                     alt="lnau" title="lnau"/>

                                                            </a>


                                                            <div class="ns2-social">
                                                            </div>


                                                            <div style="clear:both"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ns2-column flt-left col-4">
                                                    <div style="padding:0">
                                                        <div class="ns2-inner">


                                                            <a href="/ru/program/79-rucont/sponsors/82-sponsor5">

                                                                <img class="ns2-image" style="float:none;margin:0 5 0 5"
                                                                     src="/cache/mod_news_show_sp2/nssp2_thumbs/sponsor/org_upma.jpg"
                                                                     alt="upma" title="upma"/>

                                                            </a>


                                                            <div class="ns2-social">
                                                            </div>


                                                            <div style="clear:both"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ns2-column flt-left col-4">
                                                    <div style="padding:0">
                                                        <div class="ns2-inner">


                                                            <a href="/ru/program/79-rucont/sponsors/79-sponsor6">

                                                                <img class="ns2-image" style="float:none;margin:0 5 0 5"
                                                                     src="/cache/mod_news_show_sp2/nssp2_thumbs/sponsor/org_g.gif"
                                                                     alt="org_g" title="org_g"/>

                                                            </a>


                                                            <div class="ns2-social">
                                                            </div>


                                                            <div style="clear:both"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <!--end ns2-page-inner-->
                                </div>
                            </div>


                            <div style="clear:both"></div>
                        </div>
                        <!--End article layout-->

                        <!--Links Layout-->
                        <!--End Links Layout-->
                        <div style="clear:both"></div>
                    </div>
                </div>

                <script type="text/javascript">
                    //<![CDATA[

                    //]]>
                </script>
            </div>
        </div>
        <div id="sp-ticket" class="clearfix">
            <div class="sp-inner clearfix">

                <div class="custom">
                    <div class="sp-highlight-bar" style="margin-bottom: 15px;">
                        <div class="sp-event-package">Участие в конференции <span class="package_rate">350 грн.</span>
                        </div>
                        <div class="sp-buy-ticket"><a href="http://conf.pm-edu.org/ru/registration">Регистрация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sp-breadcrumbs" class="clearfix">
            <div class="sp-inner clearfix">

                <div class="custom">
                    <div class="sp-wrap clearfix" style="padding-bottom: 20px">
                        <div style="color: silver;font-size:16px;">
                            <div style="width:50%;float:left">
                                Кафедра Стратегического Управления НТУ "ХПИ"<br/>
                                Все права защищены © <?= date('Y') ?> Харьков, Украина
                            </div>
                            <div style="width:50%;float:right;text-align:right">
                                <script type="text/javascript">(function () {
                                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                                        if (window.ifpluso == undefined) {
                                            window.ifpluso = 1;
                                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                            s.type = 'text/javascript';
                                            s.charset = 'UTF-8';
                                            s.async = true;
                                            s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                            var h = d[g]('body')[0];
                                            h.appendChild(s);
                                        }
                                    })();</script>
                                <div class="pluso" data-background="#ebebeb"
                                     data-options="medium,round,line,horizontal,counter,theme=06"
                                     data-services="facebook,vkontakte,twitter,linkedin,google"
                                     data-url="http://conf.pm-edu.org/"
                                     data-title="INTEGRATED MANAGEMENT <?= date('Y') ?>"
                                     data-description="Конференция для профессионалов по управлению проектами и программами
16-18 февраля   г.пгт. Славское, Карпаты, Украина" data-user="730123174"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- You need to purchase copyright removal license from http://www.joomshaper.com/pricing?tab=copyright in order to remove brand/www.joomshaper.com link. -->

    </div>
</div>

<a id="topofpage" href="#" rel="nofollow">Scroll to Top</a>


<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">-->
<!--    (function (d, w, c) {-->
<!--        (w[c] = w[c] || []).push(function () {-->
<!--            try {-->
<!--                w.yaCounter24983399 = new Ya.Metrika({-->
<!--                    id: 24983399,-->
<!--                    webvisor: true,-->
<!--                    clickmap: true,-->
<!--                    trackLinks: true,-->
<!--                    accurateTrackBounce: true,-->
<!--                    ut: "noindex"-->
<!--                });-->
<!--            } catch (e) {-->
<!--            }-->
<!--        });-->
<!--        var n = d.getElementsByTagName("script")[0],-->
<!--            s = d.createElement("script"),-->
<!--            f = function () {-->
<!--                n.parentNode.insertBefore(s, n);-->
<!--            };-->
<!--        s.type = "text/javascript";-->
<!--        s.async = true;-->
<!--        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";-->
<!--        if (w.opera == "[object Opera]") {-->
<!--            d.addEventListener("DOMContentLoaded", f, false);-->
<!--        } else {-->
<!--            f();-->
<!--        }-->
<!--    })(document, window, "yandex_metrika_callbacks");-->
<!--</script>-->
<!--<noscript>-->
<!--    <div><img src="//mc.yandex.ru/watch/24983399?ut=noindex" style="position:absolute; left:-9999px;" alt=""/></div>-->
<!--</noscript>-->
<!-- /Yandex.Metrika counter -->
<!--<script>-->
<!--    (function (i, s, o, g, r, a, m) {-->
<!--        i['GoogleAnalyticsObject'] = r;-->
<!--        i[r] = i[r] || function () {-->
<!--            (i[r].q = i[r].q || []).push(arguments)-->
<!--        }, i[r].l = 1 * new Date();-->
<!--        a = s.createElement(o),-->
<!--            m = s.getElementsByTagName(o)[0];-->
<!--        a.async = 1;-->
<!--        a.src = g;-->
<!--        m.parentNode.insertBefore(a, m)-->
<!--    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');-->
<!---->
<!--    ga('create', 'UA-51869736-2', 'pm-edu.org');-->
<!--    ga('send', 'pageview');-->
<!--</script>-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.spoiler-text').hide()
        jQuery('.spoiler').click(function () {
            jQuery(this).toggleClass("folded").toggleClass("unfolded").next().slideToggle();
        });
    });
</script>
</body>
</html>
 
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="sp-item-fulltext clearfix container">


        <div class="article-tools clearfix">
            <!--End Date-->

            <div class="article-info-wrapper"><!--Start Article title and tool-->

                <h1>
                    <a href="/en/contact-us">
                        Contact information</a>
                </h1>


                <dl class="article-info">


                </dl>

            </div>
            <!--End article tools-->

        </div>


        <!--Image-->
        <!--End Image-->


        <h4><strong>OUR ADDRESS</strong></h4>
        <hr>
        <h4>Ukraine, 61002, Kharkiv, 21, Frunze str., NTU “KhPI”, Strategic Management Department (U-2 Building, 7th
            floor, room 703)</h4><br>

        <p></p><br>

        <div style="float:left; width:50%">
            <h4><strong>ORGANIZING COMMITTEE</strong></h4>
            <hr align="left" width="90%">
            <div style="float: left; width: 115px; height: 150px; margin-right: 20px;"><img
                    src="http://conf.pm-edu.org/images/haraziy_small.jpg" alt=""></div>
            <p><strong>Anna Kharazii</strong></p>

            <p>mobile: +38(066)060-16-19 <br>phone: +38(057)707-68-24&nbsp;<br> e-mail: imconf@gmail.com<br> skype:
                anjashechka</p><br>
        </div>

        <div style="float:right; width:50%">
            <h4><strong>PROGRAM COMMITTEE</strong></h4>
            <hr align="left" width="100%">
            <div style="float: left; width: 115px; height: 150px; margin-right: 20px;"><img
                    src="http://conf.pm-edu.org/images/loback_small.jpg" alt=""></div>
            <p><strong>Helena Lobach</strong></p>

            <p>mobile: +38(050)984-69-79 <br>phone: +38(057)707-68-24&nbsp;<br>e-mail: publish.conf@gmail.com<br> skype:
                helena_0900</p>
        </div>
        <br>

<!--        <div style="float: left; text-align: left;"><br><br><h4><strong>WE ARE ON THE MAP</strong></h4>-->
<!---->
<!--            <div style="outline: 1px solid #A9A9A9;">-->
<!--                <ymaps id="ymaps1458475970942572310" style="display: block; width: 920px; height: 400px;">-->
<!--                    <ymaps class="ymaps-2-1-34-map ymaps-2-1-34-i-ua_js_yes ymaps-2-1-34-map-ru"-->
<!--                           style="width: 920px; height: 400px;">-->
<!--                        <ymaps class="ymaps-2-1-34-inner-panes">-->
<!--                            <ymaps class="ymaps-2-1-34-events-pane ymaps-2-1-34-user-selection-none" unselectable="on"-->
<!--                                   style="height: 100%; width: 100%; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2500; cursor: url(&quot;//api-maps.yandex.ru/2.1.34/./build/release//images/util_cursor_storage_grab.cur&quot;) 16 16, url(&quot;//api-maps.yandex.ru/2.1.34/./build/release//images/util_cursor_storage_grab.cur&quot;), move;"></ymaps>-->
<!--                            <ymaps class="ymaps-2-1-34-ground-pane"-->
<!--                                   style="position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); transition-duration: 0ms; z-index: 501;">-->
<!--                                <ymaps style="z-index: 150; position: absolute;">-->
<!--                                    <canvas height="656" width="1176"-->
<!--                                            style="position: absolute; width: 1176px; height: 656px; left: -128px; top: -128px;"></canvas>-->
<!--                                </ymaps>-->
<!--                            </ymaps>-->
<!--                            <ymaps class="ymaps-2-1-34-copyrights-pane"-->
<!--                                   style="height: 0px; bottom: 5px; top: auto; right: 3px; left: 10px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 5002;">-->
<!--                                <ymaps>-->
<!--                                    <ymaps class="ymaps-2-1-34-copyright ymaps-2-1-34-copyright_logo_no">-->
<!--                                        <ymaps class="ymaps-2-1-34-copyright__fog">…</ymaps>-->
<!--                                        <ymaps class="ymaps-2-1-34-copyright__wrap">-->
<!--                                            <ymaps class="ymaps-2-1-34-copyright__layout">-->
<!--                                                <ymaps class="ymaps-2-1-34-copyright__content-cell">-->
<!--                                                    <ymaps class="ymaps-2-1-34-copyright__content">-->
<!--                                                        <ymaps class="ymaps-2-1-34-copyright__text">© Яндекс</ymaps>-->
<!--                                                        <ymaps class="ymaps-2-1-34-copyright__agreement">&nbsp;<a-->
<!--                                                                class="ymaps-2-1-34-copyright__link" target="_blank"-->
<!--                                                                href="http://legal.yandex.ru/maps_termsofuse/">Условия-->
<!--                                                                использования</a></ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                                <ymaps class="ymaps-2-1-34-copyright__logo-cell"><a-->
<!--                                                        class="ymaps-2-1-34-copyright__logo" href=""-->
<!--                                                        target="_blank"></a></ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                </ymaps>-->
<!--                                <ymaps>-->
<!--                                    <ymaps class="ymaps-2-1-34-islets_gotoymaps">-->
<!--                                        <ymaps class="ymaps-2-1-34-islets_gotoymaps__icon"></ymaps>-->
<!--                                        <ymaps class="ymaps-2-1-34-islets_gotoymaps__text">Открыть в Яндекс.Картах-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                </ymaps>-->
<!--                            </ymaps>-->
<!--                            <ymaps class="ymaps-2-1-34-controls-pane"-->
<!--                                   style="width: 100%; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 4503;">-->
<!--                                <ymaps class="ymaps-2-1-34-controls__toolbar" style="margin-top: 10px;">-->
<!--                                    <ymaps class="ymaps-2-1-34-controls__toolbar_left">-->
<!--                                        <ymaps-->
<!--                                            class="ymaps-2-1-34-controls__control_toolbar ymaps-2-1-34-user-selection-none"-->
<!--                                            style="margin-right: 0px; margin-left: 10px;" unselectable="on">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-button_icon_only"-->
<!--                                                    role="button" type="button" style="max-width: 90px"-->
<!--                                                    title="Определить Ваше местоположение">-->
<!--                                                    <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                        <ymaps-->
<!--                                                            class="ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_geolocation"></ymaps>-->
<!--                                                        <ymaps class="ymaps-2-1-34-button__title"-->
<!--                                                               style="display: none;"></ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                        <ymaps class="ymaps-2-1-34-controls__control_toolbar"-->
<!--                                               style="margin-right: 0px; margin-left: 10px;">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps class="ymaps-2-1-34-search ymaps-2-1-34-search_layout_common">-->
<!--                                                    <ymaps id="id_14584759720063237652">-->
<!--                                                        <ymaps>-->
<!--                                                            <ymaps-->
<!--                                                                class="ymaps-2-1-34-search ymaps-2-1-34-search_layout_normal">-->
<!--                                                                <ymaps id="id_14584759720063237653">-->
<!--                                                                    <ymaps>-->
<!--                                                                        <ymaps class="ymaps-2-1-34-search__input">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-search__input-wrap">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-input ymaps-2-1-34-input_size_s ymaps-2-1-34-input_theme_normal">-->
<!--                                                                                    <ymaps-->
<!--                                                                                        class="ymaps-2-1-34-input__box">-->
<!--                                                                                        <input-->
<!--                                                                                            class="ymaps-2-1-34-input__control"-->
<!--                                                                                            name=""-->
<!--                                                                                            placeholder="Адрес или объект"-->
<!--                                                                                            autocomplete="off">-->
<!--                                                                                        <ymaps-->
<!--                                                                                            class="ymaps-2-1-34-input__clear"></ymaps>-->
<!--                                                                                    </ymaps>-->
<!--                                                                                </ymaps>-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-search__serp-button"></ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                        <ymaps class="ymaps-2-1-34-search__button">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_action ymaps-2-1-34-button_side_right ymaps-2-1-34-user-selection-none"-->
<!--                                                                                role="button" type="button"-->
<!--                                                                                unselectable="on">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-button__text">-->
<!--                                                                                    Найти-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                                <ymaps id="id_14584759720063237654">-->
<!--                                                                    <ymaps>-->
<!--                                                                        <ymaps-->
<!--                                                                            class="ymaps-2-1-34-islets_serp-popup ymaps-2-1-34-islets__hidden">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-islets_serp-popup__tail"></ymaps>-->
<!--                                                                            <ymaps class="ymaps-2-1-34-islets_serp"-->
<!--                                                                                   style="max-height: 315px;">-->
<!--                                                                                <ymaps id="id_14584759720063237655">-->
<!--                                                                                    <ymaps></ymaps>-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                            <ymaps-->
<!--                                                style="z-index: 40000; display: block; position: absolute; width: 263px; top: 29px; left: 48px;"></ymaps>-->
<!--                                        </ymaps>-->
<!--                                        <ymaps-->
<!--                                            class="ymaps-2-1-34-controls__control_toolbar ymaps-2-1-34-user-selection-none"-->
<!--                                            style="margin-right: 0px; margin-left: 10px;" unselectable="on">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-button_icon_only"-->
<!--                                                    role="button" type="button" style="max-width: 28px" title="">-->
<!--                                                    <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                        <ymaps-->
<!--                                                            class="ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_routes"></ymaps>-->
<!--                                                        <ymaps class="ymaps-2-1-34-button__title"-->
<!--                                                               style="display: none;"></ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                    <ymaps class="ymaps-2-1-34-controls__toolbar_right">-->
<!--                                        <ymaps class="ymaps-2-1-34-controls__control_toolbar"-->
<!--                                               style="margin-right: 10px; margin-left: 0px;">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps class="ymaps-2-1-34-traffic">-->
<!--                                                    <ymaps id="id_14584759720063237684" unselectable="on"-->
<!--                                                           class="ymaps-2-1-34-user-selection-none">-->
<!--                                                        <ymaps>-->
<!--                                                            <ymaps-->
<!--                                                                class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_traffic_left ymaps-2-1-34-button_theme_normal"-->
<!--                                                                role="button" type="button" style="">-->
<!--                                                                <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-traffic__icon ymaps-2-1-34-traffic__icon_icon_off ymaps-2-1-34-button__icon"></ymaps>-->
<!--                                                                    <ymaps class="ymaps-2-1-34-button__title">-->
<!--                                                                        <ymaps>Пробки</ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                        <ymaps></ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                    <ymaps id="id_14584759720063237685">-->
<!--                                                        <ymaps>-->
<!--                                                            <ymaps-->
<!--                                                                class="ymaps-2-1-34-traffic__panel ymaps-2-1-34-popup ymaps-2-1-34-popup_direction_down ymaps-2-1-34-popup_to_bottom ymaps-2-1-34-popup_theme_ffffff ymaps-2-1-34-user-selection-none"-->
<!--                                                                unselectable="on" style="width: 252px;">-->
<!--                                                                <ymaps-->
<!--                                                                    class="ymaps-2-1-34-traffic__tail ymaps-2-1-34-popup__tail"></ymaps>-->
<!--                                                                <ymaps class="ymaps-2-1-34-traffic__panel-content">-->
<!--                                                                    <ymaps id="id_14584759720063237686">-->
<!--                                                                        <ymaps>-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-traffic__switcher">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-traffic__switcher-item ymaps-2-1-34-traffic__switcher-item_data_actual ymaps-2-1-34-traffic__switcher-item_selected_yes">-->
<!--                                                                                    Сегодня-->
<!--                                                                                </ymaps>-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-traffic__switcher-item ymaps-2-1-34-traffic__switcher-item_data_archive">-->
<!--                                                                                    Статистика-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                    <ymaps></ymaps>-->
<!--                                                                    <ymaps></ymaps>-->
<!--                                                                    <ymaps></ymaps>-->
<!--                                                                    <ymaps></ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                        <ymaps class="ymaps-2-1-34-controls__control_toolbar"-->
<!--                                               style="margin-right: 10px; margin-left: 0px;">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-listbox ymaps-2-1-34-listbox_opened_no ymaps-2-1-34-listbox_align_right"-->
<!--                                                    style="width: 76px;">-->
<!--                                                    <ymaps-->
<!--                                                        class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-button_arrow_down ymaps-2-1-34-user-selection-none"-->
<!--                                                        role="button" type="button" title="" unselectable="on">-->
<!--                                                        <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                            <ymaps-->
<!--                                                                class="ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_layers"></ymaps>-->
<!--                                                            <ymaps class="ymaps-2-1-34-button__title">Слои</ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                    <ymaps-->
<!--                                                        class="ymaps-2-1-34-listbox__panel ymaps-2-1-34-i-custom-scroll"-->
<!--                                                        style="transform: translate3d(0px, 0px, 0px) scale(1, 1);">-->
<!--                                                        <ymaps class="ymaps-2-1-34-listbox__list"-->
<!--                                                               style="max-height: 999999px;">-->
<!--                                                            <ymaps>-->
<!--                                                                <ymaps>-->
<!--                                                                    <ymaps id="id_14584759720063237701">-->
<!--                                                                        <ymaps unselectable="on"-->
<!--                                                                               class="ymaps-2-1-34-user-selection-none">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-listbox__list-item ymaps-2-1-34-listbox__list-item_selected_yes">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-listbox__list-item-text">-->
<!--                                                                                    Схема-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                            <ymaps>-->
<!--                                                                <ymaps>-->
<!--                                                                    <ymaps id="id_14584759720063237704">-->
<!--                                                                        <ymaps unselectable="on"-->
<!--                                                                               class="ymaps-2-1-34-user-selection-none">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-listbox__list-item ymaps-2-1-34-listbox__list-item_selected_no">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-listbox__list-item-text">-->
<!--                                                                                    Спутник-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                            <ymaps>-->
<!--                                                                <ymaps>-->
<!--                                                                    <ymaps id="id_14584759720063237707">-->
<!--                                                                        <ymaps unselectable="on"-->
<!--                                                                               class="ymaps-2-1-34-user-selection-none">-->
<!--                                                                            <ymaps-->
<!--                                                                                class="ymaps-2-1-34-listbox__list-item ymaps-2-1-34-listbox__list-item_selected_no">-->
<!--                                                                                <ymaps-->
<!--                                                                                    class="ymaps-2-1-34-listbox__list-item-text">-->
<!--                                                                                    Гибрид-->
<!--                                                                                </ymaps>-->
<!--                                                                            </ymaps>-->
<!--                                                                        </ymaps>-->
<!--                                                                    </ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                        <ymaps-->
<!--                                            class="ymaps-2-1-34-controls__control_toolbar ymaps-2-1-34-user-selection-none"-->
<!--                                            style="margin-right: 10px; margin-left: 0px;" unselectable="on">-->
<!--                                            <ymaps>-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-button_icon_only"-->
<!--                                                    role="button" type="button" style="max-width: 28px" title="">-->
<!--                                                    <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                        <ymaps-->
<!--                                                            class="ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_expand"-->
<!--                                                            style="display: inline-block;"></ymaps>-->
<!--                                                        <ymaps class="ymaps-2-1-34-button__title"-->
<!--                                                               style="display: none;"></ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                </ymaps>-->
<!--                                <ymaps class="ymaps-2-1-34-controls__bottom" style="top: 400px;">-->
<!--                                    <ymaps class="ymaps-2-1-34-controls__control"-->
<!--                                           style="margin-right: 0px; margin-left: 0px; bottom: 30px; top: auto; right: 10px; left: auto;">-->
<!--                                        <ymaps>-->
<!--                                            <ymaps style="display: block;">-->
<!--                                                <ymaps-->
<!--                                                    style="display: inline-block; height: 100%; vertical-align: top;">-->
<!--                                                    <ymaps id="id_14584759720063237671">-->
<!--                                                        <ymaps>-->
<!--                                                            <ymaps class="ymaps-2-1-34-scaleline"-->
<!--                                                                   style="width: 65px; min-width: 59px">-->
<!--                                                                <ymaps class="ymaps-2-1-34-scaleline__left">-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-scaleline__left-border"></ymaps>-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-scaleline__left-line"></ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                                <ymaps class="ymaps-2-1-34-scaleline__center">-->
<!--                                                                    <ymaps class="ymaps-2-1-34-scaleline__label">200&nbsp;м</ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                                <ymaps class="ymaps-2-1-34-scaleline__right">-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-scaleline__right-border"></ymaps>-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-scaleline__right-line"></ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                                <ymaps style="display: inline-block; width: 10px; height: 0"></ymaps>-->
<!--                                                <ymaps style="display: inline-block;">-->
<!--                                                    <ymaps id="id_14584759720063237672" unselectable="on"-->
<!--                                                           class="ymaps-2-1-34-user-selection-none">-->
<!--                                                        <ymaps>-->
<!--                                                            <ymaps-->
<!--                                                                class="ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-button_icon_only"-->
<!--                                                                role="button" type="button" style="max-width: 28px"-->
<!--                                                                title="Измерение расстояний на карте">-->
<!--                                                                <ymaps class="ymaps-2-1-34-button__text">-->
<!--                                                                    <ymaps-->
<!--                                                                        class="ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_ruler"></ymaps>-->
<!--                                                                    <ymaps class="ymaps-2-1-34-button__title"-->
<!--                                                                           style="display: none;"></ymaps>-->
<!--                                                                </ymaps>-->
<!--                                                            </ymaps>-->
<!--                                                        </ymaps>-->
<!--                                                    </ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                </ymaps>-->
<!--                                <ymaps class="ymaps-2-1-34-controls__control"-->
<!--                                       style="margin-right: 0px; margin-left: 0px; bottom: auto; top: 108px; right: auto; left: 10px;">-->
<!--                                    <ymaps>-->
<!--                                        <ymaps class="ymaps-2-1-34-zoom" style="height: 150px">-->
<!--                                            <ymaps-->
<!--                                                class="ymaps-2-1-34-zoom__plus ymaps-2-1-34-zoom__button ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-user-selection-none"-->
<!--                                                unselectable="on">-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-zoom__icon ymaps-2-1-34-button__icon"></ymaps>-->
<!--                                            </ymaps>-->
<!--                                            <ymaps-->
<!--                                                class="ymaps-2-1-34-zoom__minus ymaps-2-1-34-zoom__button ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-user-selection-none"-->
<!--                                                unselectable="on">-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-zoom__icon ymaps-2-1-34-button__icon"></ymaps>-->
<!--                                            </ymaps>-->
<!--                                            <ymaps class="ymaps-2-1-34-zoom__scale">-->
<!--                                                <ymaps-->
<!--                                                    class="ymaps-2-1-34-zoom__runner ymaps-2-1-34-zoom__button ymaps-2-1-34-button ymaps-2-1-34-button_size_s ymaps-2-1-34-button_theme_normal ymaps-2-1-34-zoom__runner__transition ymaps-2-1-34-touch-action-none ymaps-2-1-34-user-selection-none"-->
<!--                                                    style="top: 22px;" unselectable="on">-->
<!--                                                    <ymaps-->
<!--                                                        class="ymaps-2-1-34-zoom__icon ymaps-2-1-34-button__icon ymaps-2-1-34-button__icon_icon_runner"></ymaps>-->
<!--                                                </ymaps>-->
<!--                                            </ymaps>-->
<!--                                        </ymaps>-->
<!--                                    </ymaps>-->
<!--                                </ymaps>-->
<!--                            </ymaps>-->
<!--                            <ymaps class="ymaps-2-1-34-places-pane"-->
<!--                                   style="position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); transition-duration: 0ms; z-index: 2004;">-->
<!--                                <ymaps class="ymaps-2-1-34-placemark-overlay ymaps-2-1-34-user-selection-none"-->
<!--                                       unselectable="on"-->
<!--                                       style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 513px; top: 286px;">-->
<!--                                    <ymaps-->
<!--                                        class="ymaps-2-1-34-svg-icon ymaps___api_maps_yandex_ru_2_1_34_907125878212islands_circleDotIcon___ED4543__ED4543_1458475973713"-->
<!--                                        style="position: absolute; width: 27px; height: 27px; left: -14px; top: -14px;"></ymaps>-->
<!--                                </ymaps>-->
<!--                            </ymaps>-->
<!--                        </ymaps>-->
<!--                    </ymaps>-->
<!--                </ymaps>-->
<!--            </div>-->
<!--        </div>-->


    </div>

</div>

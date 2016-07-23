<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2016
 * Time: 22:52
 */
$this->title = 'Conference archive 2014';
?>

<section id="insidePhoto">
    <div class="container">
        <h2><?= $this->title ?></h2>

        <div class="tabs">
            <?= $this->render('archive-menu.php') ?>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                            <li>
                                <img src="/markup/images/gallery/gallery1.jpg"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="presentation">
                        <a id="pres1" href="javascript:;">
                            <img src="/markup/images/archive/2014/presentations/01.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a id="pres2" href="javascript:;">
                            <img src="/markup/images/archive/2014/presentations/02.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a id="pres3" href="javascript:;">
                            <img src="/markup/images/archive/2014/presentations/03.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a id="pres4" href="javascript:;">
                            <img src="/markup/images/archive/2014/presentations/04.jpg" alt="">
                        </a>
                    </div>
                    <div class="presentation">
                        <a id="pres5" href="javascript:;">
                            <img src="/markup/images/archive/2014/presentations/05.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <a href="" class="hvr-shutter-out-horizontal download">
                        <p>Download published papers</p> <i class="fa fa-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

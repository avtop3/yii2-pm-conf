<?php

/* @var $this yii\web\View */

$this->title = 'Integrated management 2016. The conference for professionals';
$this->params['bodyClass'] = 'homepage';
?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(/markup/images/s1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">VII International Scientific Conference</h1>
                                <h2 class="animation animated-item-2">«Integrated Strategic Management, Portfolio, Program and Project Management»</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(/markup/images/s2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Conference Venue</h1>
                                <h2 class="animation animated-item-2">Hotel “Pearl of the Carpathians", located in a picturesque corner of the Carpathians just 300 meters from the ski lifts of Slavske Ski Resort</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(/markup/images/s3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Traditional Conference Participants</h1>
                                <h2 class="animation animated-item-2">Leading scientists and experts in project management and information technology</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(/markup/images/s4.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Conference Papers</h1>
                                <h2 class="animation animated-item-2">All accepted papers will be published in peer-reviewed scientific journal, indexed in the international scientometric databases</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->
<section id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="media-body">
                        <h2>Conference starts in:</h2>
                        <p>Conference has ended!</p>
                        <div class="countdown">
                            <div class="clock col-sm-12">
                                <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                                    <div class="wrap">
                                        <div class="inner">
                                            <div id="canvas_days" class="clock-canvas"></div>
                                            <div class="text">
                                                <p class="val">0</p>
                                                <p class="type-days type-time">ДНЕЙ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                                    <div class="wrap">
                                        <div class="inner">
                                            <div id="canvas_hours" class="clock-canvas"></div>
                                            <div class="text">
                                                <p class="val">0</p>
                                                <p class="type-hours type-time">ЧАСОВ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                                    <div class="wrap">
                                        <div class="inner">
                                            <div id="canvas_minutes" class="clock-canvas"></div>
                                            <div class="text">
                                                <p class="val">0</p>
                                                <p class="type-minutes type-time">МИНУТ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                                    <div class="wrap">
                                        <div class="inner">
                                            <div id="canvas_seconds" class="clock-canvas"></div>
                                            <div class="text">
                                                <p class="val">0</p>
                                                <p class="type-seconds type-time">СЕКУНД</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Registered Participants: <span id="members">0</span></p>
                        <a href="" class="btn btn-default registr disabled"><i class="fa fa-ticket"></i> Registration</a>
                    </div>

                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>KEYNOTE SPEAKERS</h2>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/babaev.jpg" alt="">
                        <h2>IGBAL BABAEV</h2>
                        <p>President of Azerbaijan Project Management Association</p>
                        <p>Baku, Azerbaijan</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/elmas.jpg" alt="">
                        <h2>ÇETİN ELMAS</h2>
                        <p>President of Turkish Project Management Association</p>
                        <p>Ankara, Turkey</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/bushuev.jpg" alt="">
                        <h2>SERGEY BUSHUIEV</h2>
                        <p>President of Ukrainian Project Management Association</p>
                        <p>Kyiv, Ukraine</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/todorov.jpg" alt="">
                        <h2>KIRIL TODOROV</h2>
                        <p>Vice President for Bulgaria of the European Council for Small Business</p>
                        <p>Sofia, Bulgaria</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chernov.jpg" alt="">
                        <h2>SERGEY CHERNOV</h2>
                        <p>HR Director at Gas Turbine Research & Production Complex "Zorya-Mashproekt"</p>
                        <p>Mykolayiv, Ukraine</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/konan.jpg" alt="">
                        <h2>IGOR KONONENKO</h2>
                        <p>Head of Strategic Management Department at National Technical University “Kharkiv Polytechnic Institute”</p>
                        <p>Kharkiv, Ukraine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/levchenko.jpg" alt="">
                        <h2>TAISIYA LEVCHENKO</h2>
                        <p>Founder and Director of the "DIYATY!" Consulting Company</p>
                        <p>Vinnytsia, Ukraine</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chumach.JPG" alt="">
                        <h2>IGOR CHUMACHENKO</h2>
                        <p>Head of Department of Project Management in Municipal Economy and Construction at О.М. Beketov National University of Urban Economy</p>
                        <p>Kharkiv, Ukraine</p>
                    </div>
                </div>
                <div class="col-lg-12 all-speakers wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <a href="about-us.html" class="btn btn-default"><i class="fa fa-users"></i> ALL SPEAKERS</a>
                </div>
                <!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->
<section id="dates">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>DEADLINES AND KEY DATES</h2>
            <hr>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/people.png" alt="">
                <p class="title">Participation in the Conference</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>October</p>
                </div>
                <div class="descr">
                    <p>Opening date for registration start</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>31</p>
                    <p>December</p>
                </div>
                <div class="descr black">
                    <p>Early registration deadline – registration fee increase</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>January</p>
                </div>
                <div class="descr red">
                    <p>Registration deadline</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>January</p>
                </div>
                <div class="descr red">
                    <p>Deadline for registration fee payment</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/article.png" alt="" class="article">
                <p class="title">Paper Publication</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>October</p>
                </div>
                <div class="descr">
                    <p>Opening date for paper submission</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>30</p>
                    <p>November</p>
                </div>
                <div class="descr red">
                    <p>Deadline for paper submission</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>15</p>
                    <p>December</p>
                </div>
                <div class="descr black">
                    <p>Paper review and notification of acceptance</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>25</p>
                    <p>December</p>
                </div>
                <div class="descr red">
                    <p>Deadline for publication payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Photos</h2>
            <!--                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b1.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b2.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">                          
                            <a class="preview" href="/markup/images/from-conf/b2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b3.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b4.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b5.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b6.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Zoom</a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="partner">
    <hr>
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>CONFERENCE ORGANISERS</h2>
        </div>

        <div class="partners col-lg-12">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="/markup/images/partners/strategic.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="/markup/images/partners/upma.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="/markup/images/partners/hpi.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="/markup/images/partners/g.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="/markup/images/partners/lnau.png"></a></li>
            </ul>
        </div>
    </div><!--/.container-->
    <div class="container">
        <div class="center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms">
            <h2>CONFERENCE PARTNERS</h2>
        </div>

        <div class="partners col-lg-12">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms" src="/markup/images/partners/zhil.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2100ms" src="/markup/images/partners/Softjourn.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2300ms" src="/markup/images/partners/diya.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2500ms" src="/markup/images/partners/LineUp.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2800ms" src="/markup/images/partners/erminesoft.png"></a></li>
            </ul>
        </div>
    </div>
    <hr>
</section><!--/#partner-->




<?php

/* @var $this yii\web\View */

$this->title = 'Integrated management 2016. Конференція для професіоналів з управління проектами';
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
                                <h1 class="animation animated-item-1">VII Міжнародна науково-практична конференція</h1>
                                <h2 class="animation animated-item-2">«Інтегроване стратегічне управління, управління портфелями, програмами, проектами»</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Більше</a>
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
                                <h1 class="animation animated-item-1">Місце проведення</h1>
                                <h2 class="animation animated-item-2">Готель «Перлина Карпат», який знаходиться у мальовничому куточку Карпат на гірськолижному курорті смт. Славське.</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Більше</a>
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
                                <h1 class="animation animated-item-1">Традиційні учасники конференції</h1>
                                <h2 class="animation animated-item-2">Провідні вчені та фахівці у сфері управління проектами, менеджменту та інформаційних технологій</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Більше</a>
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
                                <h1 class="animation animated-item-1">Праці конференції</h1>
                                <h2 class="animation animated-item-2">Усі статті будуть опубліковані у рецензованому науковому журналі, що входить до переліку фахових видань України</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Більше</a>
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
                        <h2>До конференції:</h2>
                        <p>Конференція завершена!</p>
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
                        <p>Вже зареєстровано учасників: <span id="members">0</span></p>
                        <a href="" class="btn btn-default registr disabled"><i class="fa fa-ticket"></i> Зареєструватися</a>
                    </div>

                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>КЛЮЧОВІ ДОПОВІДАЧІ</h2>
            <hr>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/babaev.jpg" alt="">
                        <h2>ІГБАЛ БАБАЄВ</h2>
                        <p>Президент Азербайджанської асоціації управління проектами AzPMA</p>
                        <p>Баку, Азербайджан</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/elmas.jpg" alt="">
                        <h2>ЧЕТИН ЕЛЬМАС</h2>
                        <p>Президент Турецької асоціації управління проектами TrPMA</p>
                        <p>Анкара, Туреччина</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/bushuev.jpg" alt="">
                        <h2>СЕРГІЙ БУШУЄВ</h2>
                        <p>Президент Української асоціації управління проектами UPMA</p>
                        <p>Київ, Україна</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/todorov.jpg" alt="">
                        <h2>КИРИЛ ТОДОРОВ</h2>
                        <p>Віце-президент Європейської ради для малого бізнесу</p>
                        <p>Софія, Болгарія</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chernov.jpg" alt="">
                        <h2>СЕРГІЙ ЧЕРНОВ</h2>
                        <p>Директор з персоналу ДП НВКГ «Зоря»-«Машпроект»</p>
                        <p>Миколаїв, Україна</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/konan.jpg" alt="">
                        <h2>ІГОР КОНОНЕНКО</h2>
                        <p>Завідувач кафедри стратегічного управління НТУ «ХПІ»</p>
                        <p>Харків, Україна</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/levchenko.jpg" alt="">
                        <h2>ТАЇСІЯ ЛЕВЧЕНКО</h2>
                        <p>Засновник і директор консалтингової компанії "ДІЯти!"</p>
                        <p>Вінниця, Україна</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chumach.JPG" alt="">
                        <h2>ІГОР ЧУМАЧЕНКО</h2>
                        <p>Завідувач кафедри управління проектами в міському господарстві і будівництві ХНУМГ ім. О.М. Бекетова</p>
                        <p>Харків, Україна</p>
                    </div>
                </div>
                <div class="col-lg-12 all-speakers wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <a href="/speakers" class="btn btn-default"><i class="fa fa-users"></i> Усі доповідачі</a>
                </div>
                <!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->
<section id="dates">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>ВАЖЛИВІ ДАТИ</h2>
            <hr>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/people.png" alt="">
                <p class="title">Участь у конференції</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>жовтня</p>
                </div>
                <div class="descr">
                    <p>Початок<br> реєстрації учасників конференції</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>31</p>
                    <p>грудня</p>
                </div>
                <div class="descr black">
                    <p>Рання оплата<br> організаційного внеску</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>січня</p>
                </div>
                <div class="descr red">
                    <p>Закінчення<br> реєстрації учасників</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>січня</p>
                </div>
                <div class="descr red">
                    <p>Оплата організаційного внеску</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/article.png" alt="" class="article">
                <p class="title">Публікація статей</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>жовтня</p>
                </div>
                <div class="descr">
                    <p>Початок прийому статей до публікації</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>30</p>
                    <p>листопада</p>
                </div>
                <div class="descr red">
                    <p>Закінчення прийому статей до публікації</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>15</p>
                    <p>грудня</p>
                </div>
                <div class="descr black">
                    <p>Рецензування та оповіщення авторів</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>25</p>
                    <p>грудня</p>
                </div>
                <div class="descr red">
                    <p>Оплата вартості публікації</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Фотографії</h2>
            <!--                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b1.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b2.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <!--
                                                            <h3><a href="#">Business theme</a></h3>
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            -->
                            <a class="preview" href="/markup/images/from-conf/b2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b3.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b4.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b5.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b6.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Подивитися</a>
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
            <h2>ОРГАНІЗАТОРИ КОНФЕРЕНЦІЇ</h2>
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
            <h2>ПАРТНЕРИ КОНФЕРЕНЦІЇ</h2>
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




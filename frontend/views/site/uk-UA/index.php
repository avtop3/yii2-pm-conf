<?php

/* @var $this yii\web\View */

$this->title = 'Integrated Management 2017: Міжнародна науково-практична конференція з управління проектами, програмами, портфелями';
$this->params['bodyClass'] = 'homepage';
?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">        
        <div class="carousel-inner">            
            <div class="item active" style="background-image: url(/markup/images/s11.jpg)">
                <div class="container full fullsize">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <div class="container titles">
                                    <h2 class="animation animated-item-1">VIII Міжнародна науково-практична конференція</h2>
                                    <hr>
                                    <h1 class="animation animated-item-2">Інтегроване стратегічне управління, <br> управління портфелями, програмами, проектами</h1>
                                </div>
                                <div id="sliderCountEN" class="counter"></div>
                                <div class="container text-center action-buttons">
                                    <a href="/uk/registration" class="regist">Реєстрація</a>
                                    <a href="/documents/uk/information_page.pdf" class="pdf">
                                        <img src="/markup/images/pdffile.png" class="img-responsive" alt="">Інформаційний лист</a>
                                </div>
                                <div class="container text-center dates">
                                    <div class="left">
                                        <div class="img-block">
                                            <img src="/markup/images/calendar.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="txt-block">
                                            <p>13-16 лютого 2017 р.</p>
                                        </div>                                        
                                    </div>
                                    <div class="right">
                                        <div class="img-block">
                                            <img src="/markup/images/location.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="txt-block">
                                            <p>с. Яблуниця (Буковель), Івано-Франківська обл., Україна</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--
                <div class="container full">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <div class="container">
                                    <div class="left">
                                        <p>13-16 лютого 2017 р.</p>
                                    </div>
                                    <div class="right">
                                        <p>с. Яблуниця (Буковель), Івано-Франківська обл., Україна</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container full absolute">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">VIII Міжнародна науково-практична конференція</h2>
                                <h1 class="animation animated-item-2">«Інтегроване стратегічне управління, управління портфелями, програмами, проектами»</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
-->
            </div><!--/.item-->

            <div class="item" style="background-image: url(/markup/images/s12.jpg)">
                <div class="container full absolute">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Місце проведення</h2>
                                <h1 class="animation animated-item-2">Готель «Горгани», який знаходиться у мальовничому куточку Карпат поруч з гірськолижним курортом Буковель</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(/markup/images/s3.jpg)">
                <div class="container full absolute">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Традиційні учасники конференції</h2>
                                <h1 class="animation animated-item-2">Провідні вчені та фахівці у сфері управління проектами, менеджменту та інформаційних технологій</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(/markup/images/s4.jpg)">
                <div class="container full absolute">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Праці конференції</h2>
                                <h1 class="animation animated-item-2">Усі статті будуть опубліковані у рецензованому науковому журналі, що входить до переліку фахових видань України та індексується в міжнародних наукометричних базах, репозитаріях та пошукових системах</h1>
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
<!--<section id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="media-body">
                        <h2>До конференції:</h2>
                        <p>Конференція завершена!</p>
                        <div id="clock"></div>
                        <p>Вже зареєстровано учасників: <span id="members">0</span></p>
                        <a href="" class="btn btn-default registr disabled"><i class="fa fa-ticket"></i> Зареєструватися</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="media counter wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="media-body">
                        <h2>До конференції:</h2>
                        <div id="clockUA"></div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
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
        <div class="row wow fadeInDown timer">
            <div class="col-md-6 text-right">
                <p class="descr">До закінчення реєстрації учасників залишилось:</p>
            </div>
            <div class="col-md-6">
                <div id="registrEndUA"></div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/people.png" alt="">
                <p class="title">Участь у конференції</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>листопада</p>
                </div>
                <div class="descr">
                    <p>Початок <br>реєстрації учасників конференції</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>31</p>
                    <p>грудня</p>
                </div>
                <div class="descr black">
                    <p>Кінцевий термін <br>для ранньої оплати організаційного внеску</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>20</p>
                    <p>січня</p>
                </div>
                <div class="descr red">
                    <p>Закінчення <br>реєстрації учасників конференції</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>20</p>
                    <p>січня</p>
                </div>
                <div class="descr red">
                    <p>Кінцевий термін <br>для оплати організаційного внеску</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown timer topMarginDates">
            <div class="col-md-6 text-right">
                <p class="descr">До закінчення прийому статей залишилось:</p>
            </div>
            <div class="col-md-6">
                <div id="articleEndUA"></div>
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
                    <p>листопада</p>
                </div>
                <div class="descr">
                    <p>Початок прийому статей до публікації від учасників конференції</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>10</p>
                    <p>грудня</p>
                </div>
                <div class="descr red">
                    <p>Закінчення прийому статей до публікації від учасників конференції</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>25</p>
                    <p>грудня</p>
                </div>
                <div class="descr black">
                    <p>Рецензування та оповіщення авторів про прийом статей</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>грудня</p>
                </div>
                <div class="descr red">
                    <p>Кінцевий термін <br>для оплати вартості публікації</p>
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
                <li> <a href="http://pm-edu.org/ua/"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="/markup/images/partners/strategic.png"></a></li>
                <li> <a href="http://upma.kiev.ua/uk" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="/markup/images/partners/upma.png"></a></li>
                <li> <a href="http://www.kpi.kharkov.ua/ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="/markup/images/partners/hpi.png"></a></li>
                <li> <a href="http://www.kname.edu.ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="/markup/images/partners/g.png"></a></li>
                <li> <a href="http://lnau.lviv.ua/lnau/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="/markup/images/partners/lnau.png"></a></li>
            </ul>
        </div>
    </div><!--/.container-->
    <div class="container">
        <div class="center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms">
            <h2>ПАРТНЕРИ КОНФЕРЕНЦІЇ</h2>
        </div>

        <div class="partners col-lg-12">
            <ul>
                <li> <a href="http://www.zhilstroj-2.ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms" src="/markup/images/partners/zhil.png"></a></li>
                <li> <a href="http://lineup.com.ua/ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2500ms" src="/markup/images/partners/LineUp.png"></a></li>
            </ul>
        </div>
    </div>
    <hr>
</section><!--/#partner-->




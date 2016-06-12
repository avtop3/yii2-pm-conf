<?php

/* @var $this yii\web\View */

$this->title = 'Integrated management 2016. Конференція для професіоналів з управління проектами';
$this->params['bodyClass'] = 'homepage';
?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
<!--
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
-->
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(/markup/images/s1.jpg)">
                <div class="container full">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                               <div class="container">
                                   <div class="left">
                                       <p>14-16 февраля, 2017 г.</p>
                                   </div>
                                   <div class="right">
                                       <p>пгт. Славское, Львовская обл., Украина</p>
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
                                <h2 class="animation animated-item-1">VII Международная научно-практическая конференция</h2>
                                <h1 class="animation animated-item-2">«Интегрированное стратегическое управление, управление портфелями, программами, проектами»</h1>
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
                                <h1 class="animation animated-item-1">Место проведения</h1>
                                <h2 class="animation animated-item-2">Отель «Жемчужина Карпат», который находится в живописном уголке Карпат на горнолыжном курорте пгт. Славское</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать дальше</a>
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
                                <h1 class="animation animated-item-1">Традиционные участники конференции</h1>
                                <h2 class="animation animated-item-2">Ведущие учёные и специалисты в сфере управления проектами, менеджмента и информационных технологий</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать дальше</a>
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
                                <h1 class="animation animated-item-1">Труды конференции</h1>
                                <h2 class="animation animated-item-2">Все статьи будут опубликованы в рецензируемом научном журнале, который входит в перечень специализированных изданий Украины</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Читать дальше</a>
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
                        <h2>До конференции осталось:</h2>
                        <p>Конференция завершена!</p>
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
                        <p>Зарегистрированных участников: <span id="members">0</span></p>
                        <a href="" class="btn btn-default registr disabled"><i class="fa fa-ticket"></i> Зарегистрироваться</a>
                    </div>

                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Ключевые докладчики</h2>
            <hr>
        </div>
        <div class="row">
            <div class="features">
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/babaev.jpg" alt="">
                        <h2>ИГБАЛ БАБАЕВ</h2>
                        <p>Президент Азербайджанской ассоциации управления проектами AzPMA</p>
                        <p>Баку, Азербайджан</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/elmas.jpg" alt="">
                        <h2>ЧЕТИН ЭЛЬМАС</h2>
                        <p>Президент Турецкой ассоциации управления проектами TrPMA</p>
                        <p>Анкара, Турция</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/bushuev.jpg" alt="">
                        <h2>СЕРГЕЙ БУШУЕВ</h2>
                        <p>Президент Украинской ассоциации управления проектами UPMA</p>
                        <p>Киев, Украина</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/todorov.jpg" alt="">
                        <h2>КИРИЛ ТОДОРОВ</h2>
                        <p>Вице-президент Европейского совета для малого бизнеса</p>
                        <p>София, Болгария</p>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chernov.jpg" alt="">
                        <h2>СЕРГЕЙ ЧЕРНОВ</h2>
                        <p>Директор по персоналу ГП НПКГ «Зоря»-«Машпроект»</p>
                        <p>Николаев, Украина</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/konan.jpg" alt="">
                        <h2>ИГОРЬ КОНОНЕНКО</h2>
                        <p>Заведующий кафедрой стратегического управления НТУ «ХПИ»</p>
                        <p>Харьков, Украина</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/levchenko.jpg" alt="">
                        <h2>ТАИСИЯ ЛЕВЧЕНКО</h2>
                        <p>Основатель и директор консалтинговой компании "ДІЯти!"</p>
                        <p>Винница, Украина</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap hvr-glow">
                        <img src="/markup/images/main-speakers/chumach.JPG" alt="">
                        <h2>ИГОРЬ ЧУМАЧЕНКО</h2>
                        <p>Заведующий кафедрой управления проектами в городском хозяйстве и строительстве ХНУГХ им. А.Н. Бекетова</p>
                        <p>Харьков, Украина</p>
                    </div>
                </div>
                <div class="col-lg-12 all-speakers wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <a href="/speakers" class="btn btn-default"><i class="fa fa-users"></i> Все докладчики</a>
                </div>
                <!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->
<section id="dates">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Ключевые даты</h2>
            <hr>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/people.png" alt="">
                <p class="title">Участие в конференции</p>
            </div>
            <div class="part">
                <div class="number">
                <p>01</p>
                <p>октября</p>
                </div>
                <div class="descr">
                    <p>Начало регистрации участников конференции</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>31</p>
                    <p>декабря</p>
                </div>
                <div class="descr black">
                    <p>Ранняя оплата организационного взноса </p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>января</p>
                </div>
                <div class="descr red">
                    <p>Окончание регистрации участников</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>января</p>
                </div>
                <div class="descr red">
                    <p>Оплата организационного взноса</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/article.png" alt="" class="article">
                <p class="title">Публикация статей</p>
            </div>
            <div class="part">
                <div class="number">
                    <p>01</p>
                    <p>октября</p>
                </div>
                <div class="descr">
                    <p>Начало<br>приема статей для публикации</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>30</p>
                    <p>ноября</p>
                </div>
                <div class="descr red">
                    <p>Окончание<br> приема статей для публикации</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>15</p>
                    <p>декабря</p>
                </div>
                <div class="descr black">
                    <p>Рецензирование и оповещение авторов<br> о приеме статей</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>25</p>
                    <p>декабря</p>
                </div>
                <div class="descr red">
                    <p>Оплата<br> стоимости публикации статьи</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Фотографии</h2>
            <!--                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b1.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
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
                            <a class="preview" href="/markup/images/from-conf/b2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b3.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b4.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b5.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 photo">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="/markup/images/from-conf/b6.jpg" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="/markup/images/from-conf/b6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Посмотреть</a>
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
            <h2>Организаторы</h2>
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
            <h2>Партнеры</h2>
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




<?php

/* @var $this yii\web\View */

$this->title = 'Integrated Management 2017: Международная научно-практическая конференция по управлению проектами, программами, портфелями';
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
                                <div class="container">
                                    <h2 class="animation animated-item-1">VIII Международная научно-практическая конференция</h2>
                                    <hr>
                                    <h1 class="animation animated-item-2">Интегрированное стратегическое управление,<br> управление портфелями, программами, проектами</h1>
                                </div>
                                <div id="sliderCountEN" class="counter"></div>
                                <div class="container text-center action-buttons">
                                    <a href="/registration" class="regist">Регистрация</a>
                                    <a href="/documents/ru/information_page.pdf" class="pdf">
                                        <img src="/markup/images/pdffile.png" class="img-responsive" alt="">Информационное письмо</a> 
                                </div>
                                <div class="container text-center">
                                    <div class="left">
                                        <div class="img-block">
                                            <img src="/markup/images/calendar.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="txt-block">
                                            <p>13-16 февраля 2017 г.</p>
                                        </div>                                        
                                    </div>
                                    <div class="right">
                                        <div class="img-block">
                                            <img src="/markup/images/location.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="txt-block">
                                            <p>с. Яблоница (Буковель), Ивано-Франковская обл., Украина</p>
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
                                       <p>13-16 февраля 2017 г.</p>
                                   </div>
                                   <div class="right">
                                       <p>с. Яблоница (Буковель), Ивано-Франковская обл., Украина</p>
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
                                <h2 class="animation animated-item-1">VIII Международная научно-практическая конференция</h2>
                                <h1 class="animation animated-item-2">«Интегрированное стратегическое управление, управление портфелями, программами, проектами»</h1>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="item" style="background-image: url(/markup/images/s12.jpg)">
                <div class="container full absolute">
                    <div class="row slide-margin">
                        <div class="col-sm-12">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Место проведения</h2>
                                <h1 class="animation animated-item-2">Отель «Горганы», который находится в живописном уголке Карпат вблизи горнолыжного курорта Буковель</h1>
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
                                <h2 class="animation animated-item-1">Традиционные участники конференции</h2>
                                <h1 class="animation animated-item-2">Ведущие учёные и специалисты в сфере управления проектами, менеджмента и информационных технологий</h1>
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
                                <h2 class="animation animated-item-1">Труды конференции</h2>
                                <h1 class="animation animated-item-2">Все статьи будут опубликованы в рецензируемом научном журнале, который входит в перечень специализированных изданий Украины и индексируется в международных наукометрических базах, репозитариях и поисковых системах</h1>
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
                        <h2>До конференции осталось:</h2>
                        <p>Конференция завершена!</p>                        
                        <p>Зарегистрированных участников: <span id="members">0</span></p>
                        <a href="" class="btn btn-default registr disabled"><i class="fa fa-ticket"></i> Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="media counter wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="media-body">
                        <h2>До конференции осталось:</h2>
                        <div id="clock"></div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
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
        <div class="row wow fadeInDown timer">
            <div class="col-md-6 text-right">
                <p class="descr">До окончания регистрации участников осталось:</p>
            </div>
            <div class="col-md-6">
                <div id="registrEnd"></div>
            </div>
        </div>
        <div class="row wow fadeInDown">
            <div class="part">
                <img src="/markup/images/people.png" alt="">
                <p class="title">Участие в конференции</p>
            </div>
            <div class="part">
                <div class="number">
                <p>01</p>
                <p>ноября</p>
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
                    <p>20</p>
                    <p>января</p>
                </div>
                <div class="descr red">
                    <p>Окончание регистрации участников</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>20</p>
                    <p>января</p>
                </div>
                <div class="descr red">
                    <p>Дедлайн для оплаты организационного взноса</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInDown timer">
            <div class="col-md-6 text-right">
                <p class="descr">До окончания приема статей для публикации осталось:</p>
            </div>
            <div class="col-md-6">
                <div id="articleEnd"></div>
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
                    <p>ноября</p>
                </div>
                <div class="descr">
                    <p>Начало<br>приема статей для публикации</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>10</p>
                    <p>декабря</p>
                </div>
                <div class="descr red">
                    <p>Окончание<br> приема статей для публикации</p>
                </div>
            </div>
            <div class="part">
                <div class="number black">
                    <p>25</p>
                    <p>декабря</p>
                </div>
                <div class="descr black">
                    <p>Рецензирование и оповещение авторов <br>о приеме статей</p>
                </div>
            </div>
            <div class="part">
                <div class="number red">
                    <p>31</p>
                    <p>декабря</p>
                </div>
                <div class="descr red">
                    <p>Дедлайн для оплаты стоимости публикации статьи</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recent-works">
    <div class="container">
        
        <div class="center wow fadeInDown">
            <h2>Фотографии</h2>
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
                <li> <a href="http://pm-edu.org/ru/"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="/markup/images/partners/strategic.png"></a></li>
                <li> <a href="http://upma.kiev.ua/ru" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="/markup/images/partners/upma.png"></a></li>
                <li> <a href="http://www.kpi.kharkov.ua/ru/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="/markup/images/partners/hpi.png"></a></li>
                <li> <a href="http://www.kname.edu.ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="/markup/images/partners/g.png"></a></li>
                <li> <a href="http://lnau.lviv.ua/lnau/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="/markup/images/partners/lnau.png"></a></li>
            </ul>
        </div>
        
    </div><!--/.container-->
    <div class="container">
        <div class="center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms">
            <h2>Партнеры</h2>
        </div>

        <div class="partners col-lg-12">
            <ul>
                <li> <a href="http://www.zhilstroj-2.ua/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms" src="/markup/images/partners/zhil.png"></a></li>
                <li> <a href="http://lineup.com.ua/ru/" rel="nofollow"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2500ms" src="/markup/images/partners/LineUp.png"></a></li>
            </ul>
        </div>
    </div>
    <hr>
</section><!--/#partner-->




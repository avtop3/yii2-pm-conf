<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10.04.2016
 * Time: 13:22
 */
/* @var $this yii\web\View */
/* @var $post \pendalf89\blog\models\Post */
use yii\helpers\Html;

$this->title = 'Спикеры';
?>

<section id="speakers">
    <div class="container">
        <h2>Спикеры конференции</h2>
        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-users" aria-hidden="true"></i> Пленарные доклады</a></li>
                <li><a href="#tab-2" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-laptop" aria-hidden="true"></i> IT секция</a></li>
                <li><a href="#tab-3" data-toggle="tab" class="hvr-bubble-bottom"><i class="fa fa-line-chart" aria-hidden="true"></i> Мастер-класс</a></li>
            </ul>

            <!--Содержимое вкладок-->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <div class="speaker">
                        <a href="#spoiler1" data-toggle="collapse">
                            <div class="row">
                                <div class="img-block">
                                    <img src="/markup/images/speakers/babaev-mini.jpg" alt="">
                                </div>
                                <div class="txt-block">
                                    <p class="name">Игбал Бабаев</p>
                                    <p>Президент Азербайджанской ассоциации</p>
                                    <p>Баку, Азербайджан</p>
                                    <p class="post">Управление инновационными проектами в динамически изменяющейся среде</p>
                                </div>
                            </div>
                        </a>
                        <div class="collapse spoiler" id="spoiler1">
                            <hr>
                            <p class="about">О спикере</p>

                            <p>Доктор технических наук по специальности "Управление проектами и программами", профессор, член совета директоров Международной ассоциации управления проектами (IPMA), первый асессор IPMA, руководитель сертификационной системы 4-L-C IPMA в Азербайджане, член Института управления проектами США (PMI USA), действительный член и вице-президент Международной современной академии им. Заде (США).</p>

                            <p>Игбал Бабаев признанный эксперт и консультант по управлению проектами и программами. Он имеет многолетний опыт разработки и внедрения систем управления проектами развития организаций, методов управления проектами, портфелем проектов и программами в крупнейших компаниях в странах СНГ. Он выступал с докладами на международных конференциях в США, Англии, Франции, Швейцарии, Германии, Австрии, Италии, Испании, Голландии, Дании, Польше, Венгрии, Турции, Иране, России, Украине, Казахстане.</p>

                            <p>Игбал Алиджанович опубликовал более 80 научно-методических работ. Под его общей научной редакцией издан азербайджанский перевод стандарта PMI PMBOK. Он член редакционного совета журналов: "Управление проектами" (Россия), "Управление проектами и развитие производства" (Украина), "Фактор успеха" (Азербайджан). Является научным руководителем журнала "Information Technology Magazine" (Азербайджан).</p>


                            <p class="content">Содержание доклада</p>

                            <p class="lang">Язык доклада: Русский</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="speaker">
                        <a href="#spoiler2" data-toggle="collapse">
                            <div class="row">
                                <div class="img-block">
                                    <img src="/markup/images/speakers/kibitkin-mini.jpg" alt="">
                                </div>
                                <div class="txt-block">
                                    <p class="name">Тарас Кибиткин</p>
                                    <p>Основатель и директор IT-компании LineUp</p>
                                    <p>Харьков, Украина</p>
                                    <p class="post">Управление инновационными проектами в динамически изменяющейся среде</p>
                                </div>
                            </div>
                        </a>
                        <div class="collapse spoiler" id="spoiler2">
                            <hr>
                            <p class="about">О спикере</p>
                            <p> Менеджер проектов, руководитель IT-компании LineUp. С 2012 года работает на рынке IT услуг, имеет опыт реализации проектов в сфере автоматизации и оптимизации бизнеса. Специализируется на внедрении IT решений и построении IT инфраструктур с нуля. Реализованы проекты в сфере логистики, недвижимости, телекоммуникаций, производства и торговли.</p>
                            <p class="content">Содержание доклада</p>
                            <p>В своем докладе Тарас расскажет про основные причины автоматизации бизнес-процессов, проблемы бизнеса, решаемые путем внедрения IT-решений, основные причины не успешности подобных проектов. Поделится собственным опытом реализации проектов автоматизации бизнеса: как правильно инициировать такой проект; особенности применяемого в компании подхода к разработке; жизненный цикл проекта. В качестве кейса будет представлен ранее выполненный проект по автоматизации деятельности агентства недвижимости в г. Харьков.</p>
                            <p class="lang">Язык доклада: Русский</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="master-class">
                        <div class="info">
                            <div class="title">
                                <h3>Мастер-класс профессора Виктора Гогунского</h3>
                                <h2>«Библиометрика научных исследований»</h2>
                                <h3>17 февраля 2016 г., начало в 10.00</h3>
                            </div>
                            <div class="photo">
                                <img src="/markup/images/speakers/gogunsky-mini.jpg" alt="">
                            </div>
                        </div>
                        <div class="description">
                            <p><strong>Цель:</strong> познакомить, показать и научить пользоваться международными наукометрическими базами данных </p>
                            <p><strong>Целевая аудитория:</strong> ученые, преподаватели, аспиранты, авторы статей в журналах</p>
                            <p><strong>Программа мастер-класса:</strong></p>
                            <ul>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Характеристика наукометрических баз данных</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Наукометрические показатели публикационной активности ученых</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Международные системы рейтинговой оценки университетов</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Международная идентификация журналов (ISSN), авторов (ORCID) и статей (DOI)</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Библиометрика украинской науки</li>
                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Средства повышения цитированости публикаций авторов</li>
                            </ul>
                            <p><strong>Продолжительность:</strong> 4 часа</p>
                            <p><strong>Стоимость участия:</strong> для участников конференции – бесплатно, для не участников – 500 грн.</p>
                        </div>
                        <div class="links">
                            <p class="name">Гогунский Виктор Дмитриевич</p>
                            <p align="justify">Известный ученый в области математического моделирования и управления проектами. Доктор технических наук по специальности «Автоматизация технологических процессов и производства». Профессор, действительный член Академии безопасности жизни и здоровья человека. Работает заведующим кафедрой управления системами безопасности жизнедеятельности в Одесском национальном политехническом университете.</p>
                            <p align="justify">Автор (соавтор) более 500 научных и научно-методических работ. Подготовил 6 докторов наук и 10 кандидатов наук. При его непосредственном участии был выполнен ряд исследований, которые положили начало новым научным направлениям внедрения информационных технологий в народном хозяйстве Украины.</p>
                            <p align="justify">За личный вклад в подготовку высококвалифицированных специалистов, развитие и внедрение в производство научных исследований награжден знаком "Отличник образования Украины", почетным знаком "За заслуги в управление проектами", удостоен звания "Заслуженный деятель науки и техники Украины".</p>
                            <div class="logo">
                                <a href="https://scholar.google.com.ua/citations?user=nHFhTCsAAAAJ&amp;hl=ru" target="_blank">
                                    <img src="/markup/images/masterclass/Google_Scholar_logo.png" alt="">
                                </a>
                            </div>

                            <div class="logo">
                                <a href="https://www.researchgate.net/profile/Viktor_Gogunsky3/publications " target="_blank">
                                    <img src="/markup/images/masterclass/ResearchGate_logo.jpg" alt="">
                                </a>
                            </div>

                            <div class="logo">
                                <a href="http://orcid.org/0000-0002-9115-2346" target="_blank">
                                    <img src="/markup/images/masterclass/ORCID_logo.png" alt="">
                                </a>
                            </div>

                            <div class="logo">
                                <a href="https://opu.academia.edu/ViktorGogunsky " target="_blank">
                                    <img src="/markup/images/masterclass/academia_edu_logo.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты | Международная конференция по управлению проектами, программами, портфелями';
?>

<section id="contacts">
    <div class="container">
        <h2>Контакты</h2>

        <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 person">
            <h3>Организационный комитет</h3>

            <p>обращаться по вопросам участия и проживания в гостиннице</p>

            <div class="img-block col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <img src="/markup/images/speakers/haraziy.jpg" alt="">
            </div>
            <div class="txt-block col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <h2>Харазий Анна Владимировна</h2>

                <p>моб.тел.: +38(066)060-16-19 </p>

                <p>раб.тел.: +38(057)707-68-24 </p>

                <p>e-mail: imconf@gmail.com</p>

                <p>skype: anjashechka</p>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 person">
            <h3>Программный комитет</h3>

            <p>обращаться по вопросам публикации статей</p>

            <div class="img-block col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <img src="/markup/images/speakers/loback.jpg" alt="">
            </div>
            <div class="txt-block col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <h2>Лобач Елена Владимировна</h2>

                <p>моб.тел.: +38(050)984-69-79 </p>

                <p>раб.тел.: +38(057)707-68-24 </p>

                <p>e-mail: publish.conf@gmail.com</p>

                <p>skype: helena_0900</p>
            </div>
        </div>
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 address">
            <h3>Наш адрес</h3>

            <p>61002, Украина, г. Харьков, ул. Кирпичева 21, НТУ «ХПИ», Кафедра стратегического управления (корпус У-2, 7й
                этаж, к. 703)</p>
            <hr>
        </div>

        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 map">
            <h3>Мы на карте</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10258.636093345713!2d36.2498081!3d49.9990019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4847f00cec333b6!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQv9C-0LvQuNGC0LXRhdC90LjRh9C10YHQutC40Lkg0LjQvdGB0YLQuNGC0YPRgg!5e0!3m2!1sru!2sua!4v1460894569060"
                width="100%" height="500" frameborder="0" style="border:1px solid #028e02;" allowfullscreen></iframe>
        </div>
    </div>
</section>


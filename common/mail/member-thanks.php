<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2016
 * Time: 13:09
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Member */

$language = $model->getNativeLanguage();

?>
<div class="member-thanks">
    <h1><?= Yii::t('app.member.mail.thanks', 'Dear {name},', ['name' => $model->name], $language) ?></h1>
    <?= Yii::t('app.member.mail.thanks', '
    <p>On behalf of the organizing and program committee of the conference we would like to thank you for your
        participation and hope to see you at the conference next year.</p>

    <p> We are pleased to announce that the electronic version of published papers, presentations of reports and photos
        from the event are available on the conference website in the "Archive" on the following link
        http://conf.pm-edu.org/ru/archive.
    </p>

    <p> We also ask you to take a few minutes and fill in the following questionnaire http://goo.gl/forms/o17j29MU8i.
        This will help make the conference next year even better.
    </p>
    <b>Sincerely,<br>the organizing and program committee of the conference</b>
    '); ?>


</div>

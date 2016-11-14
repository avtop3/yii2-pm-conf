<?php
use yii\bootstrap\Html;

/*  @var $this \yii\web\View */
/*  @var $member \common\models\Member */
?>
<html>
<style>
    body {
        font-family: times;
        font-size: 12pt;
    }

    .center {
        text-align: center;
    }

    h3 {
        font-weight: bold;
    }

    .main-content {
        font-size: 14pt;
        text-indent: 30px;
        text-align: justify;
    }

    img {
        width: 100%;
    }
</style>
<body>
<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/header_ru-ru.jpg') ?>"/>
</p>
<p class="p_under_header">________№ ___________</p>

<p class="p_under_header">На № _________________</p>
<br/>
<br/>
<h3 class="center"><?= Yii::t(
        'app.pdf.invite',
        '{sex,select,male{Уважаемый} female{Уважаемая} other{Уважаемый(aя)}} {name}!',
        ['sex' => $member->sex, 'name' => $member->name]
    ) ?></h3>

<p class="main-content">
    Приглашаем Вас принять участие в работе VIII-й Международной научно-практической конференции «Интегрированное
    стратегическое управление, управление портфелями, программами, проектами», которая состоится 13-16 февраля 2017 года
    в с. Яблоница Ивано-Франковской области в отеле «Горганы».
</p>
<br/>

<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/footer_ru-ru.jpg') ?>"/>
</p>
</body>
</html>

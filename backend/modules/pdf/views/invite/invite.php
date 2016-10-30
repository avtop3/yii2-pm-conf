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

    .p_under_header {
        margin-left: 30px;
    }

    .main-content {
        text-indent: 30px;
    }
</style>
<body>
<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/header.jpg') ?>"/>
</p>

<p class="p_under_header">________№ ___________</p>

<p class="p_under_header">На № _________________</p>

<br/>
<br/>

<h3 class="center">Шановний(а) <?= $member->name ?> !</h3>

<p class="main-content">
    Запрошуємо Вас прийняти участь у VIII-й Міжнародній науково-практичній конференції
    «Інтегроване стратегічне управління, управління портфелями, програмами, проектами»,
    яка відбудеться 13-16 лютого 2017 року в с. Яблуниця Івано-Франківської області, готель «Горгани».</p>
<br/>

<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/footer.jpg') ?>" class="center"/>
</p>
</body>
</html>

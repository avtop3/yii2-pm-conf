<?php
use yii\bootstrap\Html;

/*  @var $this \yii\web\View */
/*  @var $member \common\models\Member */
/*  @var $locale string ['en-US', 'uk-UA', 'ru-RU'] */
Yii::$app->language = $locale;
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
        font-size: 12pt;
        text-align: justify;
    }

    img {
        width: 100%;
    }
</style>
<body>
<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/header_en-us.jpg') ?>"/>
</p>

<h3>Dear <?= $member->name ?>,</h3>


    <p  class="main-content">It is with great pleasure that we invite you to participate in the 8th International Scientific and Practical
    Conference “Integrated Strategic Management, Portfolio, Program, and Project Management”, which will be held at
    Hotel “Gorgany Mountain Resort” in a resort village of Yablunytsa, Ivano-Frankivsk region, Ukraine from 13 to 16
    February 2017.</p>
    
    <p  class="main-content">The objective of the Conference is a discussion of new ideas in the field of strategic management, portfolio,
    program, and project management. The Conference will be a platform for scientists, managers and other participants
    to discuss the current situation, challenges and advancements relating to the unification of experience in the
    application of strategic management, portfolio, program, and project management in different sectors of the economy.</p>
    
    <p  class="main-content">The Conference will be divided into substantive sessions and working groups, providing the opportunity to focus on
    specific areas such as Integration of Strategic Management with Portfolio, Program and Project Management; Managing
    ІТ Projects; Application of Effective Management Technologies in Practice.
    </p>
    <p class="main-content">Looking forward to seeing you at this important event,</p>
<br/>

<p class="center">
    <img src="<?= Yii::getAlias('@backend/modules/pdf/views/pdf_parts/footer_en-us.jpg') ?>"/>
</p>
</body>
</html>

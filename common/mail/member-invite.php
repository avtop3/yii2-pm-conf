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
Yii::$app->language = $language;

$homeUrl = Yii::$app->urlManagerFrontEnd->createUrl('');
?>
<div class="member-info">
    <h1><?= Yii::t('app.member.mail.invite', 'Dear {name},', ['name' => $model->name]) ?></h1>
    <!--    <p>-->
    <? //= Yii::t('app.member.mail.invite', 'You can register here: {regUrl}', ['regUrl' => Html::a($regUrl, $regUrl, ['target' => '_blank'])], $language) ?><!--</p>-->

    <?= Yii::t('app.member.mail.invite', '
    <p>It is with great pleasure that we invite you to participate in the 8th International Conference “Integrated
        Strategic Management, Portfolio, Program and Project Management” to be held at Hotel “Pearl of the Carpathians”
        in Slavsko, Lviv region, Ukraine from 14 to 16 February 2017.</p>

    <p>The Conference is organized by the National Technical University “Kharkiv Polytechnic Institute” (NTU “KhPI”), in
        collaboration with the Ukrainian Project Management Association (UPMA), and the O.M. Beketov National University
        of Urban Economy.</p>

    <p>The objective of the Conference is a discussion of new ideas in the field of strategic management, portfolio,
        program, and project management. The Conference will be a platform for scientists, managers and other
        participants to discuss the current situation, challenges and advancements relating to the unification of
        experience in the application of strategic management, portfolio, program, and project management in different
        sectors of the economy.</p>

    <p>The Conference will be divided into substantive sessions and working groups, providing the opportunity to focus
        on specific areas such as Integration of Strategic Management with Portfolio, Program and Project Management;
        Managing ІТ Projects; Application of Effective Management Technologies in Practice.</p>

    <p>The working languages of the Conference are English, Ukrainian, and Russian.</p>

    <p>Please refer to the Conference official website {homeUrl} for more details. Should you have
        further questions about the 8th International Conference, please address them to Mr. Igor Kononenko
        (igorvkononenko@gmail.com), Ms. Helena Lobach (publish.conf@gmail.com) or Ms. Anna Kharazii (imconf@gmail.com).

    <p>Looking forward to seeing you at this important event!</p>

    <b>Sincerely,<br>the organizing committee of the conference</b>
    ', ['homeUrl' => $homeUrl]) ?>


</div>

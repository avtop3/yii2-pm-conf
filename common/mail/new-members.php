<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.10.2016
 * Time: 20:48
 *
 * @var $this yii\web\View
 * @var int $membersCount
 */
$url = Yii::$app->urlManagerBackEnd->createUrl(['/member/last-members']);
?>
<div class="new-members">
    <p><strong><?= $membersCount ?></strong> new members are waiting for confirm email.</p>

    <p><?= \yii\bootstrap\Html::a('Click here to manage members', $url) ?></p>
</div>
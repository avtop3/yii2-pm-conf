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


$regUrl = Yii::$app->urlManagerFrontEnd->createUrl('member');
?>
<div class="member-info">
    <h1><?= Yii::t('app.member.mail', 'Hello dear {name} we are inviting you to the next PM conference! It will be on 15th of January 2017', ['name' => $model->name]) ?></h1>

    <p><?= Yii::t('app.member.mail', 'You can register here: {regUrl}', ['regUrl' => Html::a($regUrl, $regUrl, ['target' => '_blank'])]) ?></p>
</div>

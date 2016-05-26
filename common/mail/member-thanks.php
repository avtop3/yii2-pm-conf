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
<div class="member-info">
    <h1><?= Yii::t('app.member.mail', 'Dear {name} thank you for participation in conference.', ['name' => $model->name], $language) ?></h1>

</div>

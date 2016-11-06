<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MembersFile */

$this->title = 'Update Members File: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Members Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="members-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

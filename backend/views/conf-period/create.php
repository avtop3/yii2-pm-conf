<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ConfPeriod */

$this->title = 'Задайте название и переод регистрации на конференцию';
$this->params['breadcrumbs'][] = ['label' => 'Conf Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conf-period-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

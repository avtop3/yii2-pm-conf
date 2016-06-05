<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Member */

$this->title = Yii::t('app', 'Create Member');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-create">
    <div class="container">
        <h2><?= Html::encode($this->title) ?></h2>

        <?= $this->render('@common/views/member/_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

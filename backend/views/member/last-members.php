<?php

use yii\bootstrap\Html;
use kartik\grid\GridView;
use yii\data\Pagination;
use yii\widgets\ActiveForm;
use common\models\memberVariants\Currency;
use common\models\memberVariants\ParticipationType;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Участники ожидающие подтверждения';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                },
                'contentOptions' => ['style' => 'width: 100px;', 'class' => 'warning ']
            ],
            'created_at:datetime',
            'position',
            'organisationTitle',
            'phone',
            'email',
            [
                'label' => Yii::t('app', 'Member`s fee'),
                'attribute' => 'totalSum',
                'value' => function ($model) {
                    return $model->totalSum . ' ' . Currency::getList()[$model->currency];
                },
                'contentOptions' => ['style' => 'width: 100px;']
            ],
            [
                'label' => 'Actions',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a(
                        Html::icon('eye-open') . ' View',
                        ['/member/view', 'id' => $model->id],
                        ['class' => 'btn btn-primary']
                    );
                }
            ]
        ],
    ]); ?>

</div>
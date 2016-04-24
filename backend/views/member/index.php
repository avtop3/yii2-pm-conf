<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Member;
use common\models\Countries;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Members');
$this->params['breadcrumbs'][] = $this->title;
$confPeriods = \backend\models\ConfPeriod::find()->orderBy('regStart')->all();


//$dateRange = [
//    'model' => $searchModel,
//    'attribute' => 'created_at',
//    'convertFormat' => true,
//    'pluginOptions' => [
////        'timePicker' => true,
////        'timePickerIncrement' => 30,
//        'locale' => [
//            'format' => 'Y-m-d '
//        ]
//    ]
//];


?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Member'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php
        foreach($confPeriods as $period){
            echo Html::a($period->title, ['/conf-period/create'], ['class' => 'btn btn-default']);
        }
        echo Html::a('+', ['/conf-period/create'], ['class' => 'btn btn-default']);


        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'name',
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                },
                'contentOptions' => ['style' => 'width: 100px;', 'class' => 'warning ']
            ],
//            'country',
//            [
//                'attribute' => 'Country',
//                'value' => 'countryObj.name',
//                'filter' => Html::activeDropDownList(
//                    $searchModel,
//                    'country',
//                    $countryVariants,
//                    ['class' => 'form-control', 'prompt' => 'None']
//                ),
//            ],
            'position',
            'organisationTitle',
            'phone',
            'email',
            [
                'attribute' => 'Listener or speaker',
                'value' => 'participationType',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'participationType',
                    Member::getParticipationTypeVariants(),
                    ['class' => 'form-control', 'prompt' => 'None']
                ),
                'contentOptions' => ['style' => 'width: 100px;']
            ],
            [
                'label' => 'Сумма',
                'attribute' => 'totalSum',
                'value' => function ($model) {
                    return $model->totalSum . ' ' . $model->currency;
                },
                'contentOptions' => ['style' => 'width: 100px;']
            ],
            [
                'label' => 'Оплачено',
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->paid) {
                        return \yii\bootstrap\Html::icon('ok', ['class' => 'text-success']);
                    } else {
                        return \yii\bootstrap\Html::icon('remove', ['class' => 'text-danger']);
                    }
                },
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'paid',
                    [0 => 'Не оплачено', 1 => 'Оплчено'],
                    ['class' => 'form-control', 'prompt' => 'Все']
                ),
                'contentOptions' => ['style' => 'width: 80px;']
            ],


//            [
//                'attribute' => 'Registration date',
//                'value' => 'created_at',
//                'format' => 'date',
//                'filter' => DateRangePicker::widget($dateRange),
//            ],
//                'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <ul class="list-group pull-right">
        <li class="list-group-item list-group-item-success">
            <h4>Сумма для выборки</h4>
        </li>
        <li class="list-group-item">
            <b class="text-success"><?= $searchModel->overallInUah ?> ГРН</b>
        </li>
        <li class="list-group-item">
            <b class="text-danger"><?= $searchModel->overallInUsd ?> USD</b>

        </li>
    </ul>

</div>

<?php
$clearDateRangePicker = <<< JS
    $('#membersearch-created_at').on('cancel.daterangepicker', function(ev, picker) {
      //do something, like clearing an input
      $('#membersearch-created_at').val('');
      $('.grid-view').yiiGridView('applyFilter');
    });
JS;
$this->registerJs($clearDateRangePicker);

?>

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

$countries = Countries::find()->asArray()->all();
$countryVariants = ArrayHelper::map($countries, 'alpha_2', 'name');

$dateRange = [
    'model' => $searchModel,
    'attribute' => 'created_at',
    'convertFormat' => true,
    'pluginOptions' => [
//        'timePicker' => true,
//        'timePickerIncrement' => 30,
        'locale' => [
            'format' => 'Y-m-d '
        ]
    ]
];
?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Member'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
//            'country',
            [
                'attribute' => 'Country',
                'value' => 'countryObj.name',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'country',
                    $countryVariants,
                    ['class' => 'form-control', 'prompt' => 'None']
                ),
            ],
            'position',
            'phone',
            'email',
            [
                'attribute' => 'Listener or speaker',
                'value' => 'participationType',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'participationType',
                    Member::$participationTypeVariants,
                    ['class' => 'form-control', 'prompt' => 'None']
                ),
            ],

            [
                'attribute' => 'Registration date',
                'value' => 'created_at',
                'format' => 'date',
                'filter' => DateRangePicker::widget($dateRange),
            ],
//                'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

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

<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Member;
use common\models\Countries;
use kartik\daterange\DateRangePicker;
use kartik\export\ExportMenu;
use yii\data\Pagination;
use yii\widgets\ActiveForm;

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
<?php //echo $this->render('_search', ['model' => $searchModel]); ?>
<?php ?>

<div class="row">

    <div class="col-md-10">
        <?= Html::a(Yii::t('app', 'Create Member'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php $form = ActiveForm::begin([
            'action' => ['index', 'MemberSearch' => Yii::$app->request->getQueryParam('MemberSearch')],
            'method' => 'get',
            'options' => [
                'style' => 'display: inline;',
            ]
        ]); ?>
        <?php
        foreach ($confPeriods as $period) {
            $class = 'btn btn-default';

            if(Yii::$app->request->get('MemberSearch')['period'] == $period->id){
                $class .= ' active';
            }

            echo Html::submitButton($period->title, [
                'class' => $class,
                'value' => $period->id,
                'class ' => 'asd',
                'name' => 'MemberSearch[period]',
            ]);
        }
        echo Html::a('+', ['/conf-period/create'], ['class' => 'btn btn-default']);

        ?>

        <?php ActiveForm::end(); ?>

    </div>

    <div class="col-md-2 text-right">
        <?=
        ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',

                [
                    'attribute' => 'Country',
                    'value' => function ($model) {
                        return $model->getCountryVariants()[$model->country];
                    }
                ],

                [
                    'attribute' => 'name',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                    },
                ],
                'position',
                'phone',
                'email',
                'interest',
                [
                    'attribute' => 'scienceDegree',
                    'value' => function ($model) {
                        return $model->getScienceDegreeVariants()[$model->scienceDegree];
                    }
                ],
                [
                    'attribute' => 'scienceTitle',
                    'value' => function ($model) {
                        return $model->getScienceTitleVariants()[$model->scienceTitle];
                    },
                ],

                'organisationTitle',
                'organisationDepartment',
                'organisationAddress',
                [
                    'attribute' => 'organisationActivity',
                    'value' => function ($model) {
                        return $model->getOrganisationActivityVariants()[$model->organisationActivity];
                    },
                ],
                'organisationUrl',

                'nameEng',
                [
                    'attribute' => Yii::t('app', 'Listener or speaker'),
                    'value' => function ($model) {
                        return $model->getParticipationTypePureVariants()[$model->participationType];
                    },
                ],
                'topicTitle',
                [
                    'attribute' => 'topicLanguage',
                    'value' => function ($model) {
                        return $model->getTopicLanguageVariants()[$model->topicLanguage];
                    },
                ],
                [
                    'attribute' => 'topicSection',
                    'value' => function ($model) {
                        return $model->getTopicSectionVariants()[$model->topicSection];
                    },
                ],
                'papersCount',

                'totalSum',
                'currency',
                'paid:boolean',
                'noteFromAdmin',

                'created_at:datetime',
            ],
            'fontAwesome' => true,
            'exportConfig' => [
                ExportMenu::FORMAT_PDF => false

            ]
        ]);
        ?>
    </div>
</div>

<?php
$pagination = new Pagination([
    'totalCount' => $dataProvider->totalCount,
    'pageSize' => $dataProvider->pagination->pageSize
]);

echo \yii\widgets\LinkPager::widget([
    'pagination' => $pagination,
]);
?>

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
            'attribute' => Yii::t('app', 'Listener or speaker'),
            'value' => function ($model) {
                return Member::getParticipationTypePureVariants()[$model->participationType];
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'participationType',
                array_merge(['' => Yii::t('app', 'All')], Member::getParticipationTypePureVariants()),
                ['class' => 'form-control',]
            ),
            'contentOptions' => ['style' => 'width: 100px;']
        ],
        [
            'label' => Yii::t('app', 'Member`s fee'),
            'attribute' => 'totalSum',
            'value' => function ($model) {
                return $model->totalSum . ' ' . $model->getCurrencyVariants()[$model->currency];
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
                [0 => 'Не оплачено', 1 => 'Оплачено'],
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

<div class="row">

    <div class="col-md-6 col-md-offset-6 text-center">
        <table class="table table-bordered">
            <tr class="info">
                <td><h4><?= Yii::t('app', 'All member`s fee') ?></h4></td>
                <td><h4 class="text-success"><?= $searchModel->overallInUah ?> ГРН</h4></td>
                <td><h4 class="text-danger"><?= $searchModel->overallInUsd ?> USD</h4></td>
            </tr>
        </table>
    </div>
</div>

</div>

<?php
//$clearDateRangePicker = <<< JS
//    $('#membersearch-created_at').on('cancel.daterangepicker', function(ev, picker) {
//      //do something, like clearing an input
//      $('#membersearch-created_at').val('');
//      $('.grid-view').yiiGridView('applyFilter');
//    });
//JS;
//$this->registerJs($clearDateRangePicker);

?>

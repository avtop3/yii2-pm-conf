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
use common\models\memberVariants\Currency;
use common\models\memberVariants\Country;
use common\models\memberVariants\OrganisationActivity;
use common\models\memberVariants\ParticipationType;
use common\models\memberVariants\ScienceDegree;
use common\models\memberVariants\ScienceTitle;
use common\models\memberVariants\TopicLanguage;
use common\models\memberVariants\TopicSection;

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
        <div class="btn-group">
            <?php
            foreach ($confPeriods as $period) {
                $class = 'btn btn-default';

                if (Yii::$app->request->get('MemberSearch')['period'] == $period->id) {
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
        </div>
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
                        return Country::getList()[$model->country];
                    }
                ],

                [
                    'attribute' => 'name',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                    },
                ],
                'sex',
                'position',
                'phone',
                'email',
                'interest',
                [
                    'attribute' => 'scienceDegree',
                    'value' => function ($model) {
                        return ScienceDegree::getList()[$model->scienceDegree];
                    }
                ],
                [
                    'attribute' => 'scienceTitle',
                    'value' => function ($model) {
                        return ScienceTitle::getList()[$model->scienceTitle];
                    },
                ],

                'organisationTitle',
                'organisationDepartment',
                'organisationAddress',
                [
                    'attribute' => 'organisationActivity',
                    'value' => function ($model) {
                        return OrganisationActivity::getList()[$model->organisationActivity];
                    },
                ],
                'organisationUrl',

                'nameEng',
                [
                    'attribute' => Yii::t('app', 'Listener or speaker'),
                    'value' => function ($model) {
                        return ParticipationType::getParticipationTypeVariants()[$model->participationType];
                    },
                ],
                'topicTitle',
                [
                    'attribute' => 'topicLanguage',
                    'value' => function ($model) {
                        return TopicLanguage::getList()[$model->topicLanguage];
                    },
                ],
                [
                    'attribute' => 'topicSection',
                    'value' => function ($model) {
                        return TopicSection::getList()[$model->topicSection];
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
        [
            'attribute' => 'sex',
            'class' => kartik\grid\EditableColumn::className(),
            'editableOptions'=>[
                'inputType'=>\kartik\editable\Editable::INPUT_DROPDOWN_LIST,
                'data' => \common\models\memberVariants\Sex::getListWitLabel()

            ],
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
                return ParticipationType::getParticipationTypeVariants()[$model->participationType];
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'participationType',
                array_merge(['' => Yii::t('app', 'All')], ParticipationType::getParticipationTypeVariants()),
                ['class' => 'form-control',]
            ),
            'contentOptions' => ['style' => 'width: 100px;']
        ],
        [
            'label' => Yii::t('app', 'Member`s fee'),
            'attribute' => 'totalSum',
            'value' => function ($model) {
                return $model->totalSum . ' ' . Currency::getList()[$model->currency];
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

<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2016
 * Time: 18:18
 */

use yii\bootstrap\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use yii\widgets\ActiveForm;

/*
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $model common\models\Member
 */
$confPeriods = \backend\models\ConfPeriod::find()->orderBy('regStart')->all();

$this->title = 'Список организаций';

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-10">
            <?php $form = ActiveForm::begin([
                'action' => ['org'],
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
                    'name' => 'period',
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
                    'organisationTitle',
                    'organisationAddress',
                    'organisationActivity',
                    'organisationUrl',
                ],
                'fontAwesome' => true,
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false

                ]
            ]);
            ?>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'organisationTitle',
            'organisationAddress',
            [
                'attribute' => 'organisationActivity',
                'format' => 'raw',
                'value' => function ($model) {
                    return $model->getOrganisationActivityVariants()[$model->organisationActivity];
                },
                'contentOptions' => ['style' => 'width: 100px;', 'class' => 'warning ']
            ],

            'organisationUrl',
        ],
    ]); ?>
</div>
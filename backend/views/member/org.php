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

/*
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $model common\models\Member
 */

$this->title = 'Список организаций';

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-2 col-md-offset-10 text-right">
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
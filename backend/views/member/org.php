<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2016
 * Time: 18:18
 */

use yii\bootstrap\Html;
use yii\grid\GridView;
/*
 * @var $dataProvider yii\data\ActiveDataProvider
 * @var $model common\models\Member
 */

$this->title = 'Список организаций';

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'organisationTitle',
            'organisationDepartment',
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
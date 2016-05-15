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

$this->title = 'Рассылка';

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= Html::beginForm() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                },
            ],
            'email',
            [
                'attribute' => 'country',
                'value' => function ($model) {
                    return $model->getCountryVariants()[$model->country];
                }
            ],
//            [
//                'attribute' => 'organisationActivity',
//                'label' => 'Сфера деятельности организции',
//                'format' => 'raw',
//                'value' => function ($model) {
//                    return $model->getOrganisationActivityVariants()[$model->organisationActivity];
//                },
//            ],
            [
                'attribute' => 'organisationTitle',
                'label' => 'Организация',
            ],
            'organisationDepartment',
            [
                'class' => 'yii\grid\CheckboxColumn',
                'header' => Html::checkBox('selection_all', false, [
                    'class' => 'select-on-check-all',
                    'label' => 'Выбрать все',
                ]),
                'contentOptions' => ['style' => 'width: 150px;']
            ],
        ],
    ]); ?>
    <div class="row">
        <div class="col-md-3 col-md-offset-7">
            <?= Html::dropDownList(
                'view',
                null,
                [
                    'member-invite' => 'Письмо-приглашение',
                    'member-thanks' => 'Письмо-благодарность'
                ],
                ['class' => 'form-control']
            ) ?>
        </div>
        <div class="col-md-2">
            <?= Html::submitButton('Отправить всем!', ['class' => 'btn btn-success']) ?>
        </div>
    </div>


    <?= Html::endForm() ?>


</div>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Member */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Send email', ['id' => $model->id], ['data-method' => 'post', 'class' => 'btn btn-warning']) ?>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!--    --><?php //print_r($model->countryObj->name) ?>


    <?php
    $attributes = [
        'name',
        [
            'attribute' => Yii::t('app.member', 'Country of residence'),
            'value' => $model->getCountryVariants()[$model->country],
        ],
        'position',
        'phone',
        'email',
        'interest',
        [
            'attribute' => $model->getAttributeLabel('scienceDegree'),
            'value' => $model->getScienceDegreeVariants()[$model->scienceDegree],
        ],
        [
            'attribute' => $model->getAttributeLabel('scienceTitle'),
            'value' => $model->getScienceTitleVariants()[$model->scienceTitle],
        ],
        'organisationTitle',
        'organisationDepartment',
        'organisationAddress',
        [
            'attribute' => $model->getAttributeLabel('organisationActivity'),
            'value' => $model->getOrganisationActivityVariants()[$model->organisationActivity],
        ],
        'organisationUrl',
        'nameEng',
        [
            'format' => 'html',
            'attribute' => $model->getAttributeLabel('participationType'),
            'value' => $model->getParticipationTypeVariants()[$model->participationType],
        ],
        [
            'attribute' => $model->getAttributeLabel('papersCount'),
            'value' => $model->papersCount . ' ' . Yii::t('app.member.view', 'papers'),
        ],
        [
            'attribute' => $model->getAttributeLabel('totalSum'),
            'value' => $model->totalSum . ' ' . $model->currency,
        ],
    ];

    if ($model->participationType == \common\models\Member::PARTICIPATION_TYPE_SPEAKER) {
        $attributesForSpeaker = [
            'topicTitle',
            [
                'attribute' => $model->getAttributeLabel('topicSection'),
                'value' => $model->getTopicSectionVariants()[$model->topicSection],
            ],
            [
                'attribute' => $model->getAttributeLabel('topicLanguage'),
                'value' => $model->getTopicLanguageVariants()[$model->topicLanguage],
            ],
        ];
        $attributes = array_merge($attributes, $attributesForSpeaker);
    }

    $attributes[] = 'paid:boolean';
    $attributes[] = 'noteFromAdmin';
    $attributes[] = 'created_at:date';

    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
    ]) ?>

</div>

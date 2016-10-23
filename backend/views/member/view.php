<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\memberVariants\Currency;
use common\models\memberVariants\Country;
use common\models\memberVariants\OrganisationActivity;
use common\models\memberVariants\ParticipationType;
use common\models\memberVariants\ScienceDegree;
use common\models\memberVariants\ScienceTitle;
use common\models\memberVariants\TopicLanguage;
use common\models\memberVariants\TopicSection;

/* @var $this yii\web\View */
/* @var $model common\models\Member */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?=
        Html::a(
            'Отправить email подтверждения регистрации',
            ['/member/send-invite-email', 'id' => $model->id],
            ['data-method' => 'post', 'class' => 'btn btn-warning']
        )
        ?>
    </p>
    <!--    --><?php //print_r($model->countryObj->name) ?>


    <?php
    $attributes = [
        'name',
        [
            'attribute' => Yii::t('app.member', 'Country of residence'),
            'value' => Country::getList()[$model->country],
        ],
        'position',
        'phone',
        'email',
        'interest',
        [
            'attribute' => $model->getAttributeLabel('scienceDegree'),
            'value' => ScienceDegree::getList()[$model->scienceDegree],
        ],
        [
            'attribute' => $model->getAttributeLabel('scienceTitle'),
            'value' => ScienceTitle::getList()[$model->scienceTitle],
        ],
        'organisationTitle',
        'organisationDepartment',
        'organisationAddress',
        [
            'attribute' => $model->getAttributeLabel('organisationActivity'),
            'value' => OrganisationActivity::getList()[$model->organisationActivity],
        ],
        'organisationUrl',
        'nameEng',
        [
            'format' => 'html',
            'attribute' => $model->getAttributeLabel('participationType'),
            'value' => ParticipationType::getList()[$model->participationType],
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

    if ($model->participationType == \common\models\memberVariants\ParticipationType::SPEAKER) {
        $attributesForSpeaker = [
            'topicTitle',
            [
                'attribute' => $model->getAttributeLabel('topicSection'),
                'value' => TopicSection::getList()[$model->topicSection],
            ],
            [
                'attribute' => $model->getAttributeLabel('topicLanguage'),
                'value' => TopicLanguage::getList()[$model->topicLanguage],
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

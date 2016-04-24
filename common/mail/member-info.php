<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2016
 * Time: 13:09
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Member */

?>
<div class="member-info">
    <h1><?= Yii::t('app.member.mail', 'Hello {name}!', ['name' => $model->name]) ?>,</h1>

    <p><?= Yii::t('app.member.mail', 'Confirmation of registration to \'International Scientific Conference\'') ?></p>

    <p> <?= Yii::t('app.member.mail', 'Message sent from {url}.', ['url' => \yii\helpers\Url::home(true)]) ?></p>

    <p><?= Yii::t('app.member.mail', 'Here is your info') ?></p>

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
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
    ]) ?>


</div>

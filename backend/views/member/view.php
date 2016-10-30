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

$pdfPath = \backend\controllers\PdfController::getPdfPath($model);
$pdfExists = file_exists($pdfPath);
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

    </p>

    <div class="panel panel-default">
        <div class="panel-heading">Email подтверждения регистрации</div>
        <div class="panel-body">
            <?php if (!$pdfExists) { ?>
                <p class="text-danger">Нет прикрепленого PDF файла к письму</p>
            <?php } ?>
            <?=
            Html::a(
                \yii\bootstrap\Html::icon('envelope') . ' Отправить',
                ['/member/send-invite-email', 'id' => $model->id],
                ['data-method' => 'post', 'class' => 'btn btn-default']
            )
            ?>

            <?php
            if ($pdfExists) {
                echo Html::a(
                    \yii\bootstrap\Html::icon('refresh') . ' PDF',
                    ['/pdf/invite-create', 'memberId' => $model->id],
                    ['class' => 'btn btn-default']
                );
            } else {
                echo Html::a(
                    \yii\bootstrap\Html::icon('plus') . ' PDF',
                    ['/pdf/invite-create', 'memberId' => $model->id],
                    ['class' => 'btn btn-success']
                );
            }
            ?>

            <?php
            if ($pdfExists) {
                echo Html::a(
                    \yii\bootstrap\Html::icon('eye-open') . ' PDF',
                    ['pdf/invite-view', 'memberId' => $model->id],
                    ['class' => 'btn btn-default', 'target' => '_blank']
                );
            }
            ?>

            <?php
            if ($pdfExists) {
                echo Html::a(
                    \yii\bootstrap\Html::icon('download-alt') . ' PDF',
                    ['pdf/invite-download', 'memberId' => $model->id],
                    ['class' => 'btn btn-default']
                );
            }
            ?>
        </div>
    </div>

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
        'inviteSentAt',

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

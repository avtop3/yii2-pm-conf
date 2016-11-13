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
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Member */
/* @var $membersFilesDataProvider \yii\data\ActiveDataProvider */

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
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">Email подтверждения регистрации</div>
        <div class="panel-body">
            <div class="btn-group">
                <?php
                echo Html::a(
                    \yii\bootstrap\Html::icon('envelope') . ' Отправить',
                    ['/member/send-invite-email', 'id' => $model->id],
                    ['data-method' => 'post', 'class' => 'btn btn-default']
                );
                echo Html::a(
                    \yii\bootstrap\Html::icon('plus') . ' Invite PDF',
                    ['/pdf/invite-create', 'memberId' => $model->id],
                    ['class' => 'btn btn-success']
                );
                ?>
            </div>
            <p></p>
            <?php
            echo GridView::widget([
                'dataProvider' => $membersFilesDataProvider,
                'columns' => [
                    'path',
                    'type',
                    [
                        'label' => 'Actions',
                        'format' => 'raw',
                        'value' => function (\common\models\MembersFile $model) {
                            return '<div class="btn-group">'
                            . Html::a(
                                \yii\bootstrap\Html::icon('eye-open'),
                                ['pdf/invite-view', 'id' => $model->id],
                                ['class' => 'btn btn-primary', 'target' => '_blank']
                            )
                            . Html::a(
                                \yii\bootstrap\Html::icon('download-alt'),
                                ['pdf/invite-download', 'id' => $model->id],
                                ['class' => 'btn btn-default']
                            )
                            . Html::a(
                                \yii\bootstrap\Html::icon('trash') . '',
                                ['members-file/delete', 'id' => $model->id],
                                [
                                    'class' => 'btn btn-default',
                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                    'data-method' => 'post',
                                ]
                            )
                            . '</div>';


                        }
                    ]
                ]
            ]);
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
            'value' => $model->papersCount . ' ' . Yii::t('app.member', 'papers'),
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

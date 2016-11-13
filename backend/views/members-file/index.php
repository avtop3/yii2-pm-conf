<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Файлы для участников конференций    ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-file-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'member.name',
                'format' => 'html',
                'value' => function (\common\models\MembersFile $membersFile) {
                    $member = $membersFile->member;
                    return Html::a($member->name, ['member/view', 'id' => $member->id]);
                }
            ],
            'path',
            'type',
            [
                'label' => 'Actions',
                'format' => 'raw',
                'value' => function (\common\models\MembersFile $model) {
                    return '<div class="btn-group">'
//                    . Html::a(
//                        \yii\bootstrap\Html::icon('refresh'),
//                        ['/pdf/invite-create', 'memberId' => $model->id],
//                        ['class' => 'btn btn-default']
//                    )
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
                        ['delete', 'id' => $model->id],
                        [
                            'class' => 'btn btn-default',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                        ]
                    )
                    . '</div>';


                }
            ],
        ],
    ]); ?>
</div>

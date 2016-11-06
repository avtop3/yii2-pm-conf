<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Members Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-file-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'member_id',
            'path',
            'type',
            [
                'label' => 'Actions',
                'format' => 'html',
                'value' => function (\common\models\MembersFile $model) {
                    return '<div class="btn-group">'
//                    . Html::a(
//                        \yii\bootstrap\Html::icon('refresh'),
//                        ['/pdf/invite-create', 'memberId' => $model->id],
//                        ['class' => 'btn btn-default']
//                    )
                    . Html::a(
                        \yii\bootstrap\Html::icon('eye-open') ,
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
                        ['class' => 'btn btn-default']
                    )
                    . '</div>';


                }
            ],
        ],
    ]); ?>
</div>

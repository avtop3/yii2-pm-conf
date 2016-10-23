<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\data\Pagination;
use yii\widgets\ActiveForm;
use common\models\memberVariants\Currency;
use common\models\memberVariants\ParticipationType;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Last registered Members');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php ?>

    <div class="row">

        <div class="col-md-10">
            <?= Html::a(Yii::t('app', 'Create Member'), ['create'], ['class' => 'btn btn-success']) ?>
            <?php $form = ActiveForm::begin([
                'action' => ['index', 'MemberSearch' => Yii::$app->request->getQueryParam('MemberSearch')],
                'method' => 'get',
                'options' => [
                    'style' => 'display: inline;',
                ]
            ]); ?>
            <?php ActiveForm::end(); ?>

        </div>

        <div class="col-md-2 text-right">
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<b>' . Html::a($model->name, ['update', 'id' => $model->id]) . '</b>';
                },
                'contentOptions' => ['style' => 'width: 100px;', 'class' => 'warning ']
            ],
            'created_at:datetime',
            'position',
            'organisationTitle',
            'phone',
            'email',
            [
                'label' => Yii::t('app', 'Member`s fee'),
                'attribute' => 'totalSum',
                'value' => function ($model) {
                    return $model->totalSum . ' ' . Currency::getList()[$model->currency];
                },
                'contentOptions' => ['style' => 'width: 100px;']
            ],
            [
                'label' => 'Actions',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::a(
                        'Send invite',
                        ['/member/send-invite-email', 'id' => $model->id],
                        ['class' => 'btn btn-warning']
                    );
                }
            ]
        ],
    ]); ?>

</div>
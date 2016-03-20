<?php

use yii\helpers\Html;
use yii\bootstrap\Html as BootHtml;

use yii\widgets\ActiveForm;
use common\models\Member;

/* @var $this yii\web\View */
/* @var $model common\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php if (count($model->errors) > 0): ?>
        <pre class="text-danger">
        <?php
        Yii::$app->session->setFlash('error', Yii::t('app', 'Something went wrong :('));
        print_r($model->errors);
        ?>
    </pre>
    <?php endif; ?>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-4 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'country')->dropDownList(Member::$countryVariants) ?>

    <h3 class="text-center text-info">Сведения об участнике</h3>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'position') ?>
    <?= $form->field($model, 'phone') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'interest') ?>
    <?= $form->field($model, 'scienceDegree')->dropDownList(Member::$scienceDegreeVariants) ?>
    <?= $form->field($model, 'scienceTitle')->dropDownList(Member::$scienceTitleVariants) ?>

    <h3 class="text-center text-info">Сведения об организации</h3>

    <?= $form->field($model, 'organisationTitle') ?>
    <?= $form->field($model, 'organisationAddress') ?>
    <?= $form->field($model, 'organisationActivity')->dropDownList(Member::$organisationActivityVariants) ?>
    <?= $form->field($model, 'organisationDepartment') ?>


    <h3 class="text-center text-info">Формат участия</h3>

    <?= $form->field($model, 'nameEng') ?>
    <?= Html::activeRadioList($model, 'participationType', Member::$participationTypeVariants, [
        'item' => function ($index, $label, $name, $checked, $value) {
            if ($index == 0) {
                return '<div class="col-lg-3 col-lg-offset-3"><label class="radio-inline">' . Html::radio($name, $checked, ['value' => $value]) . $label . '</label></div>';
            }
            return '<div class="col-lg-6"><label class="radio-inline">' . Html::radio($name, $checked, ['value' => $value]) . $label . '</label></div>';
        }
    ]); ?>
    <!--    --><? //= $form->field($model, 'participationType')->radioList($model->participation)->label(false) ?>
    <?= $form->field($model, 'topicTitle') ?>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <?= BootHtml::activeDropDownList(
                $model,
                'topicLanguage',
                Member::$topicLanguageVariants,
                ['class' => 'form-control']
            ) ?>
        </div>
        <div class="col-lg-4">
            <?= BootHtml::activeDropDownList(
                $model,
                'topicSection',
                Member::$topicSectionVariants,
                ['class' => 'form-control']
            ) ?>
        </div>
    </div>


    <h3 class="text-center text-info">К оплате</h3>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Create'), ['class' => 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

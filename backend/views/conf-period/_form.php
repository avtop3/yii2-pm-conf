<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vakorovin\datetimepicker\Datetimepicker;


/* @var $this yii\web\View */
/* @var $model backend\models\ConfPeriod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conf-period-form">

    <?php $form = ActiveForm::begin(); ?>

    <h3><?= $model->getAttributeLabel('title') ?></h3>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label(false) ?>

    <div class="col-md-6">
        <h3><?= $model->getAttributeLabel('regStart') ?></h3>
        <?= $form->field($model, 'regStart')->widget(
            Datetimepicker::className(),
            [
                'options' => [
                    'lang' => 'ru',
                    'inline' => true,
                    'format' => 'unixtime',
                    'timepicker' => false,
                ]])->label(false);
        ?>
    </div>
    <div class="col-md-6">
        <h3><?= $model->getAttributeLabel('regEnd') ?></h3>

        <?= $form->field($model, 'regEnd')->widget(
            Datetimepicker::className(),
            [
                'options' => [
                    'lang' => 'ru',
                    'inline' => true,
                    'format' => 'unixtime',
                    'timepicker' => false,
                ]])->label(false);
        ?>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\bootstrap\Html as BootHtml;
use yii\widgets\ActiveForm;
use common\models\Member;
use common\models\memberVariants\Country;
use common\models\memberVariants\OrganisationActivity;
use common\models\memberVariants\ParticipationType;
use common\models\memberVariants\ScienceDegree;
use common\models\memberVariants\ScienceTitle;
use common\models\memberVariants\TopicLanguage;
use common\models\memberVariants\TopicSection;

/* @var $this yii\web\View */
/* @var $model common\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="member-form registration">

        <?php if (count($model->errors) > 0): ?>
            <pre class="text-danger">
        <?php
        Yii::$app->session->setFlash('error', Yii::t('app', 'Something went wrong :('));
        print_r($model->errors);
        ?>
    </pre>
        <?php endif; ?>

        <?php $form = ActiveForm::begin([
            'id' => 'register-member',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-4 control-label'],
            ],
        ]); ?>

        <?php if ($model->scenario == Member::SCENARIO_ADMIN): ?>

            <div class="panel panel-primary">
                <div class="panel-body">

                    <div class="col-md-offset-4">
                        <?= $form->field($model, 'paid')->checkbox() ?>
                    </div>
                    <?= $form->field($model, 'noteFromAdmin')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'created_at')->widget(
                        \vakorovin\datetimepicker\Datetimepicker::className(),
                        [
                            'options' => [
                                'lang' => 'ru',
                                'inline' => true,
                                'format' => 'unixtime',
                                'timepicker' => false,
                            ]]);
                    ?>

                </div>
            </div>
            <hr>

        <?php endif; ?>

        <?= $form->field($model, 'country')->dropDownList(Country::getList()) ?>

        <div id="lang-note" class="text-center text-warning">
            <strong>Fill in the fields in English please</strong>
        </div>

        <h3 class="text-center text-info middle-header">
            <?= Yii::t('app.member', 'Information about the participant') ?>
        </h3>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'position') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'interest') ?>
        <?= $form->field($model, 'scienceDegree')->dropDownList(ScienceDegree::getList()) ?>
        <?= $form->field($model, 'scienceTitle')->dropDownList(ScienceTitle::getList()) ?>

        <h3 class="text-center text-info middle-header">
            <?= Yii::t('app.member', 'Organisation information') ?>
        </h3>

        <?= $form->field($model, 'organisationTitle') ?>
        <?= $form->field($model, 'organisationDepartment') ?>
        <?= $form->field($model, 'organisationAddress') ?>
        <?= $form->field($model, 'organisationActivity')->dropDownList(OrganisationActivity::getList()) ?>
        <?= $form->field($model, 'organisationUrl') ?>

        <h3 class="text-center text-info middle-header">
            <?= Yii::t('app.member', 'Form of participation') ?>
        </h3>

        <?= $form->field($model, 'nameEng') ?>
        <div class="form-group">
            <?= Html::activeRadioList($model, 'participationType', ParticipationType::getList(), [
                'item' => function ($index, $label, $name, $checked, $value) {
                    if ($index == 0) {
                        return '<div class="col-lg-3 col-lg-offset-3"><label class="radio-inline">'
                        . Html::radio($name, $checked, ['value' => $value, 'class'=>'member-participation-type']) . $label . '</label></div>';
                    }
                    return '<div class="col-lg-6"><label class="radio-inline">'
                    . Html::radio($name, $checked, ['value' => $value, 'class'=>'member-participation-type']) . $label . '</label></div>';
                }
            ]); ?>
        </div>

        <div class="hidden info-for-speaker">
            <div class="row">
                <?= $form->field($model, 'topicTitle', [
                    'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('topicTitle'),
                        'class' => 'form-control'
                    ],
                    'template' => "\n<div class=\"col-lg-6 col-lg-offset-3\">{input}</div>\n<div class=\"col-lg-3 \">{error}</div>"
                ]) ?>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <?= BootHtml::activeDropDownList(
                        $model,
                        'topicLanguage',
                        TopicLanguage::getList(),
                        ['class' => 'form-control']
                    ) ?>
                </div>
                <div class="col-lg-4">
                    <?= BootHtml::activeDropDownList(
                        $model,
                        'topicSection',
                        TopicSection::getList(),
                        ['class' => 'form-control']
                    ) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center text-info middle-header">
                <?= Yii::t('app.member', 'Payment') ?>
            </h3>

            <table class="table table-bordered table-responsive summary-info text-center">
                <tr class="success">
                    <th><?= Yii::t('app.member', 'table full name') ?></th>
                    <th><?= Yii::t('app.member', 'Registration fee') ?></th>
                    <th class=""><?= Yii::t('app.member', 'Conference papers') ?></th>
                    <th><?= Yii::t('app.member', 'Total to pay') ?></th>
                </tr>

                <tr class="summary-data">
                    <td id="table-full-name"></td>
                    <td id="table-registration-fee"></td>
                    <td class="papersCount">
                        <div class="col-md-6">
                            <?= BootHtml::activeDropDownList(
                                $model,
                                'papersCount',
                                [
                                    0 => Yii::t('app.member', 'No papers'),
                                    1 => 1,
                                    2 => 2,
                                    3 => 3,
                                    4 => 4,
                                    5 => 5,
                                    6 => 6,
                                    7 => 7,
                                    8 => 8,
                                    9 => 9,
                                    10 => 10,
                                ],
                                ['class' => 'form-control ']
                            )
                            ?></div>
                        <div class="col-md-6"><span id="price-for-papers"></span></div>
                    </td>
                    <td class="total-sum"></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <h2 class="pull-right super-total">
                <?= Yii::t('app.member', 'Total sum'); ?>
                <span class="total-sum text-primary"></span>
            </h2>
        </div>

        <div class="form-group text-center">
            <?=
            Html::activeCheckbox($model, 'agreement', [
                'label' => Yii::t('app.member', 'I give my consent to the processing of my personal data imposed by me'),
                'labelOptions' => ['class' => 'control-label']
            ]);
            ?>
        </div>
        <div class="form-group text-center">
            <?= Html::submitButton(Yii::t('app.member', 'Submit'), ['class' => 'btn btn-success btn-lg']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

<?php
$css = <<<CSS
.summary-data td{
    font-size: x-large;
}
.hidden{
    height: 0;
    overflow: auto;
}
.summary-data td.papersCount{
    width: 35%;
}
CSS;
$this->registerCss($css);

$paramsObj = json_encode(Yii::$app->params['registration']);
$this->registerJs('var paramsObj = ' . $paramsObj . ';');

$bindFullName = <<< JS

var selectedCountry;
var registrationFee;
var priceForPapers;

$('#member-name').on('change', function(){
    setTableFullName();
});
$('#member-country').on('change', function(){
    setTableRegistrationFee();
    langNote();
    setPapersPrice();
    setTotalPrice();
});
$('#member-paperscount').on('change', function(){
    setPapersPrice();
    setTotalPrice();
});
$('#member-agreement').on('change', function(){
    activateSubmitButton();
});

$('input[type=radio]', '#register-member').on('change', function(){
console.log('asd');
    if($(this).val() == 'speaker'){
        $('.info-for-speaker').removeClass('hidden');
    }else{
        $('.info-for-speaker').addClass('hidden');
    }
});

function setTableFullName(){
    var nameField = $('#member-name').val();
    $('#table-full-name').html(nameField || 'No name');
}
setTableFullName();

function setTableRegistrationFee(){
    selectedCountry = $('#member-country').val();
    var tableField;

    if(selectedCountry == 'ua'){
        registrationFee = paramsObj.uah.fee;
        tableField = registrationFee + ' грн';
    }else{
        registrationFee =  paramsObj.usd.fee;
        tableField = '$' + registrationFee;
    }
    $('#table-registration-fee').html(tableField);
}
setTableRegistrationFee();

function setPapersPrice(){
    var papersCount = +$('#member-paperscount').val();
    var priceForPapersLabel;

    if(selectedCountry == 'ua'){
        priceForPapers = papersCount *  paramsObj.uah.priceForPapers;
        priceForPapersLabel = priceForPapers + ' грн';
    }else{
        priceForPapers = papersCount * paramsObj.usd.priceForPapers;
        priceForPapersLabel = '$' + priceForPapers;
    }
    $('#price-for-papers').html(priceForPapersLabel);
}
setPapersPrice();

function setTotalPrice(){
    var totalSum = 0;

    if(priceForPapers){
        totalSum = +registrationFee + +priceForPapers;
    }else{
        totalSum = +registrationFee ;
    }

    if(selectedCountry == 'ua'){
        $('.total-sum').html(totalSum + ' грн');
    }else{
        $('.total-sum').html('$' + totalSum );
    }
}
setTotalPrice();

function langNote(){
    var languageNote = '';

    if(selectedCountry == 'ru' || selectedCountry == 'by' || selectedCountry == 'kz'){
        languageNote= 'Заполните поля на русском языке, пожалуйста';
    }else{
        languageNote = 'Fill in the fields in English, please';
    }

    if(selectedCountry == 'ua'){
        languageNote ='Заповніть форму українською мовою, будь ласка';
    }

    $('#lang-note>strong').html(languageNote);
}
langNote();

function activateSubmitButton(){
    var selectorSubmitButton = $('button[type="submit"]');

    if($('#member-agreement').is(':checked')){
        selectorSubmitButton.removeClass('disabled');
    }else{
        selectorSubmitButton.addClass('disabled');
    }
}
activateSubmitButton();

JS;

$this->registerJs($bindFullName);
?>
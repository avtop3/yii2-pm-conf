<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.04.2016
 * Time: 13:09
 */
use yii\widgets\DetailView;
use common\models\memberVariants\Country;
use common\models\memberVariants\OrganisationActivity;
use common\models\memberVariants\ParticipationType;
use common\models\memberVariants\ScienceDegree;
use common\models\memberVariants\ScienceTitle;
use common\models\memberVariants\TopicLanguage;
use common\models\memberVariants\TopicSection;

/* @var $this yii\web\View */
/* @var $model common\models\Member */
/* @var $locale string */

Yii::$app->language = $locale;

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
];

if ($model->participationType == ParticipationType::SPEAKER) {
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
?>


<div class="member-info">
    <h1><?= Yii::t('app.member.mail', 'Dear {name}!', ['name' => $model->name]) ?></h1>

    <p><?= Yii::t('app.member.mail', 'We thank you for your interest in our conference Integrated Management 2017. Your registration was successful and you were added to the list of participants. During registration the following personal details have been specified:') ?></p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
    ]) ?>

    <p><?= Yii::t('app.member.mail', 'If you want to change any of the personal data (in particular the Name and Surname for the certificate), please let us know by sending an e-mail to the following address pm.khpi@gmail.com. Please, do not perform the re-registration on the site!') ?> </p>

    <p><?= Yii::t('app.member.mail', 'We remind you that participation fee payment for participants from not Ukraine is made on arrival. ') ?> </p>

    <p><?= Yii::t('app.member.mail', 'If you have any questions, please contact us in any convenient way for you, and we will gladly help you. All available methods for communication are shown on the contact page of the conference website (http://conf.pm-edu.org/en/contacts).') ?> </p>

    <b><?= Yii::t('app.member.mail', 'Sincerely,<br> the organizing committee of the conference') ?> </b>

</div>


<?php
$css = <<< CSS
th {
    text-align: left;
    background-color: #d3d3d3;
}
td, th, table {
    border: solid 1px black;
}
CSS;

$this->registerCss($css)
?>

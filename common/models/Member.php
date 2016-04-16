<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07.02.2016
 * Time: 19:02
 */

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use common\models\Countries;

class Member extends ActiveRecord
{
//    public static $topicSectionVariants = [0 => 'First var', 2 => 'Second Variant'];
//    public static $countryVariants = [];

    const PARTICIPATION_TYPE_LISTENER = 'listener';
    const PARTICIPATION_TYPE_SPEAKER = 'speaker';

    public static function tableName()
    {
        return 'member';
    }

    public function behaviors()
    {
        return [
            'date' => TimestampBehavior::className(),
        ];
    }

    public function init()
    {
        parent::init();
        $this->participationType = self::PARTICIPATION_TYPE_LISTENER;
    }


    public function attributes()
    {
        return [
            'id',

            'country',

            'name',
            'position',
            'phone',
            'email',
            'interest',
            'scienceDegree',
            'scienceTitle',

            'organisationTitle',
            'organisationDepartment',
            'organisationAddress',
            'organisationActivity',
            'organisationUrl',

            'nameEng', //like in international passport
            'participationType', // listener or speaker
            'topicTitle',
            'topicLanguage',
            'topicSection',
            'papersCount',

            'created_at',
            'updated_at',
        ];
    }

    public function attributeLabels()
    {
        return [
            'country' => Yii::t('app.member', 'Country of residence'),
            'name' => Yii::t('app.member', 'Full name'),
            'position' => Yii::t('app.member', 'Position'),
            'phone' => Yii::t('app.member', 'Phone number'),
            'email' => Yii::t('app.member', 'E-mail'),
            'interest' => Yii::t('app.member', 'Research interests'),
            'scienceDegree' => Yii::t('app.member', 'Scientific Degree'),
            'scienceTitle' => Yii::t('app.member', 'Academic rank'),

            'organisationTitle' => Yii::t('app.member', 'Full title'),
            'organisationDepartment' => Yii::t('app.member', 'Name of the department/division'),
            'organisationAddress' => Yii::t('app.member', 'Mailing address'),
            'organisationActivity' => Yii::t('app.member', 'Field of activity'),
            'organisationUrl' => Yii::t('app.member', 'Website'),

            'nameEng' => Yii::t('app.member', 'Name and Surname according to your international passport (for the certificate)'), //like in international passport
//            'participationType' => Yii::t('app.member', ''), // listener or speaker
            'topicTitle' => Yii::t('app.member', 'Enter the title of your report'),
            'topicLanguage' => Yii::t('app.member', 'Language of report'),
            'topicSection' => Yii::t('app.member', 'Select section'),

        ];
    }


    public function rules()
    {
        $attr = $this->attributes();
        unset($attr['id']);
//        return [
//            [$attr, 'safe']
//        ];

        return [
            [
                [
                    'country',
                    'name',
                    'position',
                    'phone',
                    'email',
                    'interest',
                    'scienceDegree',
                    'scienceTitle',
                    'organisationTitle',
                    'organisationDepartment',
                    'organisationAddress',
                    'organisationActivity',
                    'nameEng',
                    'participationType',
                    'topicTitle',
                    'topicLanguage',
                    'topicSection',
                    'papersCount',
                ], 'required'],
            [
                [
                    'name',
                    'position',
                    'interest',
                    'organisationTitle',
                    'organisationDepartment',
                    'organisationAddress',
                    'organisationActivity',
                    'nameEng',
                    'topicTitle',
                ], 'string'],
            ['email', 'email'],
            ['phone', 'match', 'pattern' => '/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/i'],
        ];
    }

    public function getCountryObj()
    {
        return $this->hasOne(Countries::className(), ['alpha_2' => 'country']);
    }

    public static function getScienceDegreeVariants()
    {
        return [
            Yii::t('app.member', 'Doctor of Sciences'),
            Yii::t('app.member', 'Doctor of Technical Sciences'),
            Yii::t('app.member', 'Doctor of Economic Sciences'),
            Yii::t('app.member', 'Doctor of Physical and Mathematical Sciences'),
            Yii::t('app.member', 'Candidate of Sciences (Ph.D.)'),
            Yii::t('app.member', 'Candidate of Technical Sciences (Ph.D.)'),
            Yii::t('app.member', 'Candidate of Economic Sciences (Ph.D.)'),
            Yii::t('app.member', 'Candidate of Physical and Mathematical Sciences (Ph.D.)'),
            Yii::t('app.member', 'No Degree'),
        ];
    }

    public static function getParticipationTypeVariants()
    {
        return [
            self::PARTICIPATION_TYPE_LISTENER => Yii::t('app.member', 'I will participate as <b>Listener</b>'),
            self::PARTICIPATION_TYPE_SPEAKER => Yii::t('app.member', 'I will participate as <b>Speaker</b>')
        ];
    }

    public static function getScienceTitleVariants()
    {
        return [
            Yii::t('app.member', 'Full Professor'),
            Yii::t('app.member', 'Docent'),
            Yii::t('app.member', 'No Rank'),
        ];
    }

    public static function getOrganisationActivityVariants()
    {
        return [
            Yii::t('app.member', 'Education, Science'),
            Yii::t('app.member', 'Information Technology'),
            Yii::t('app.member', 'Banking, Finance, Investment'),
            Yii::t('app.member', 'Hotel and Restaurant Business, Tourism'),
            Yii::t('app.member', 'Public Administration'),
            Yii::t('app.member', 'Consulting, Analytics, Audit'),
            Yii::t('app.member', 'Culture, Showbiz, Entertainment'),
            Yii::t('app.member', 'Medicine, Pharmaceuticals, Health Care'),
            Yii::t('app.member', 'Real Estate'),
            Yii::t('app.member', 'Non-profit Organizations'),
            Yii::t('app.member', 'Industry, Manufacturing'),
            Yii::t('app.member', 'Agriculture, Agribusiness'),
            Yii::t('app.member', 'Construction, Architecture'),
            Yii::t('app.member', 'Telecommunications'),
            Yii::t('app.member', 'Trade, Commerce'),
            Yii::t('app.member', 'Transport, Auto Business'),
            Yii::t('app.member', 'Services'),
        ];
    }

    public static function getTopicLanguageVariants()
    {
        return [
            Yii::t('app.member', 'English'),
            Yii::t('app.member', 'Ukrainian'),
            Yii::t('app.member', 'Russian'),
        ];
    }

    public static function getTopicSectionVariants()
    {
        return [
            Yii::t('app.member', 'Plenary Session'),
            Yii::t('app.member', 'Section 1. Integration of Strategic Management with Portfolio, Program and Project Management: Models, Methods and Techniques'),
            Yii::t('app.member', 'Section 2. Managing ІТ Projects'),
            Yii::t('app.member', 'Section 3. Application of Effective Management Technologies in Practice'),
        ];
    }

    public static function getCountryVariants()
    {
//        $countries = Countries::find()->asArray()->all();
//        return ArrayHelper::map($countries, 'alpha_2', 'name');
        return [
            'ua' => Yii::t('app.member', 'Ukraine'),
            'ru' => Yii::t('app.member', 'Russia'),
            'by' => Yii::t('app.member', 'Belarus'),
            'kz' => Yii::t('app.member', 'Kazakhstan'),
            'other' => Yii::t('app.member', 'Other'),
        ];
    }
}
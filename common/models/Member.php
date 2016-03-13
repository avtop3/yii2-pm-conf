<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 07.02.2016
 * Time: 19:02
 */

namespace common\models;


use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use common\models\Countries;

class Member extends ActiveRecord
{
    public static $participationTypeVariants = ['listener' => 'As listener', 'speaker' => 'As speaker'];
    public static $scienceDegreeVariants = [0 => 'No degree', 1 => 'Doctor', 2 => 'Candidate'];
    public static $scienceTitleVariants = [0 => 'No rank', 1 => 'Full professor', 2 => 'Associate Professor'];
    public static $organisationActivityVariants = [0 => 'Teaching', 1 => 'Business planning', 2 => 'PM'];
    public static $topicLanguageVariants = ['uk' => 'Українська', 'ru' => 'Русский', 'en' => 'English'];
    public static $topicSectionVariants = [0 => 'First var', 2 => 'Second Variant'];
    public static $countryVariants = [];

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
        $countries = Countries::find()->asArray()->all();
        self::$countryVariants = ArrayHelper::map($countries, 'alpha_2', 'name');
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

            'nameEng', //like in international passport
            'participationType', // listener or speaker
            'topicTitle',
            'topicLanguage',
            'topicSection',

            'created_at',
            'updated_at',
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
        return $this->hasOne(Countries::className(), ['alpha_2' => 'country' ]);
    }
}
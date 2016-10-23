<?php
/**
 * Created by PhpStorm.
 * User: Alex Kovalchuk
 * Date: 07.02.2016
 * Time: 19:02
 */

namespace common\models;

use common\models\memberVariants\ParticipationType;
use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use common\models\Countries;

/**
 * Class Member
 * @package common\models
 * @property int $id
 * @property int $papersCount
 * @property string $country
 * @property string $participationType
 * @property string $name
 * @property string $position
 * @property string $phone
 * @property string $email
 * @property string $interest
 * @property string $scienceDegree
 * @property string $scienceTitle
 * @property string $organisationTitle
 * @property string $organisationDepartment
 * @property string $organisationAddress
 * @property string $organisationActivity
 * @property string $organisationUrl
 * @property string $nameEng
 * @property string $topicTitle
 * @property string $topicLanguage
 * @property string $topicSection
 * @property string $paid
 * @property string $noteFromAdmin
 * @property string $created_at
 * @property string $updated_at
 * @property string $currency
 * @property string $totalSum
 * @property string $inviteSentAt
 */
class Member extends ActiveRecord
{
//    public static $topicSectionVariants = [0 => 'First var', 2 => 'Second Variant'];
//    public static $countryVariants = [];

    const SCENARIO_ADMIN = 'admin';

    /**
     * @var bool
     */
    public $agreement = false;

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
        $this->participationType = ParticipationType::LISTENER;
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
            'totalSum',
            'currency',
            'paid',
            'noteFromAdmin',
            'inviteSentAt',
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
            'paid' => Yii::t('app.member', 'Payment status'),
            'noteFromAdmin' => Yii::t('app.member', 'Note from Admin'),
            'created_at' => Yii::t('app.member', 'Registration date'),
            'totalSum' => Yii::t('app.member', 'Total sum'),
            'papersCount' => Yii::t('app.member', 'Papers count'),
            'participationType' => Yii::t('app.member', 'Participation Type'),

        ];
    }


    public function rules()
    {
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
//                    'topicTitle',
                    'topicLanguage',
                    'topicSection',
                    'papersCount',
                    'organisationUrl',
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
            ['papersCount', 'integer'],
            ['agreement', 'boolean'],
            ['email', 'email'],
            [['paid', 'noteFromAdmin', 'created_at'], 'safe', 'on' => Member::SCENARIO_ADMIN],
            ['organisationUrl', 'url'],
            ['paid', 'default', 'value' => 0],
            ['phone', 'match', 'pattern' => '/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/i'],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->calculatePrice();
            return true;
        } else {
            return false;
        }
    }

    private function calculatePrice()
    {
        if ($this->country == 'ua') {
            $this->currency = 'uah';
            $this->totalSum = $this->papersCount
                * Yii::$app->params['registration']['uah']['priceForPapers']
                + Yii::$app->params['registration']['uah']['fee'];
        } else {
            $this->currency = 'usd';
            $this->totalSum = $this->papersCount
                * Yii::$app->params['registration']['usd']['priceForPapers']
                + Yii::$app->params['registration']['usd']['fee'];
        }
    }

    public function getNativeLanguage()
    {
        $language = 'en-US';

        if ($this->country == 'ua') {
            $language = 'uk-UA';
        }

        if (in_array($this->country, ['ru', 'by', 'kz'])) {
            $language = 'ru-RU';
        }

        return $language;
    }

    public function touchInviteSentAt()
    {
        $this->inviteSentAt = date('U');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Alex Kovalchuk
 * Date: 07.02.2016
 * Time: 19:02
 */

namespace common\models;

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
 */
class Member extends ActiveRecord
{
//    public static $topicSectionVariants = [0 => 'First var', 2 => 'Second Variant'];
//    public static $countryVariants = [];

    const PARTICIPATION_TYPE_LISTENER = 'listener';
    const PARTICIPATION_TYPE_SPEAKER = 'speaker';

    const SCENARIO_ADMIN = 'admin';

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

            'totalSum',
            'currency',
            'paid',
            'noteFromAdmin',

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
//        $attr = $this->attributes();
//        unset($attr['id']);
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
            $this->totalSum = $this->papersCount * 150 + 350;
        } else {
            $this->currency = 'usd';
            $this->totalSum = $this->papersCount * 50 + 100;
        }
    }

    public function getCountryObj()
    {
        return $this->hasOne(Countries::className(), ['alpha_2' => 'country']);
    }

    public static function getScienceDegreeVariants()
    {
        return [
            'd_sc' => Yii::t('app.member', 'Doctor of Sciences'),
            'd_sc_tech' => Yii::t('app.member', 'Doctor of Technical Sciences'),
            'd_sc_econ' => Yii::t('app.member', 'Doctor of Economic Sciences'),
            'd_sc_math' => Yii::t('app.member', 'Doctor of Physical and Mathematical Sciences'),
            'ph_d' => Yii::t('app.member', 'Candidate of Sciences (Ph.D.)'),
            'ph_d_tech' => Yii::t('app.member', 'Candidate of Technical Sciences (Ph.D.)'),
            'ph_d_econ' => Yii::t('app.member', 'Candidate of Economic Sciences (Ph.D.)'),
            'ph_d_math' => Yii::t('app.member', 'Candidate of Physical and Mathematical Sciences (Ph.D.)'),
            'no_degree' => Yii::t('app.member', 'No Degree'),
        ];
    }

    public static function getParticipationTypeVariants()
    {
        return [
            self::PARTICIPATION_TYPE_LISTENER => Yii::t('app.member', 'I will participate as <b>Listener</b>'),
            self::PARTICIPATION_TYPE_SPEAKER => Yii::t('app.member', 'I will participate as <b>Speaker</b>')
        ];
    }

    public static function getParticipationTypePureVariants()
    {
        return [
            self::PARTICIPATION_TYPE_LISTENER => Yii::t('app.member', 'Listener'),
            self::PARTICIPATION_TYPE_SPEAKER => Yii::t('app.member', 'Speaker')
        ];
    }

    public static function getScienceTitleVariants()
    {
        if (Yii::$app->language == 'ru-RU' || Yii::$app->language == 'uk-UA') {
            return [
                'prof' => Yii::t('app.member', 'Full Professor'),
                'sen_res_off' => Yii::t('app.member', 'Senior Research Officer'),
                'docent' => Yii::t('app.member', 'Docent'),
                'no_rank' => Yii::t('app.member', 'No Rank'),
            ];
        } else {
            return [
                'prof' => Yii::t('app.member', 'Full Professor'),
                'docent' => Yii::t('app.member', 'Docent'),
                'no_rank' => Yii::t('app.member', 'No Rank'),
            ];
        }
    }

    public static function getOrganisationActivityVariants()
    {
        return [
            'science' => Yii::t('app.member', 'Education, Science'),
            'it' => Yii::t('app.member', 'Information Technology'),
            'finance' => Yii::t('app.member', 'Banking, Finance, Investment'),
            'hotel' => Yii::t('app.member', 'Hotel and Restaurant Business, Tourism'),
            'public_adm' => Yii::t('app.member', 'Public Administration'),
            'consult' => Yii::t('app.member', 'Consulting, Analytics, Audit'),
            'culture' => Yii::t('app.member', 'Culture, Showbiz, Entertainment'),
            'h_care' => Yii::t('app.member', 'Medicine, Pharmaceuticals, Health Care'),
            'real_est' => Yii::t('app.member', 'Real Estate'),
            'npo' => Yii::t('app.member', 'Non-profit Organizations'),
            'industry' => Yii::t('app.member', 'Industry, Manufacturing'),
            'agricult' => Yii::t('app.member', 'Agriculture, Agribusiness'),
            'construct' => Yii::t('app.member', 'Construction, Architecture'),
            'telecom' => Yii::t('app.member', 'Telecommunications'),
            'trade' => Yii::t('app.member', 'Trade, Commerce'),
            'auto' => Yii::t('app.member', 'Transport, Auto Business'),
            'service' => Yii::t('app.member', 'Services'),
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
//        $mapedCountry = ArrayHelper::map($countries, 'alpha_2', 'name');

        return [
            'ua' => Yii::t('app.member', 'Ukraine'),
            'ru' => Yii::t('app.member', 'Russian Federation'),
            'by' => Yii::t('app.member', 'Belarus'),
            'kz' => Yii::t('app.member', 'Kazakhstan'),
            'af' => Yii::t('app.member', 'Afghanistan'),
            'ax' => Yii::t('app.member', 'Aland Islands'),
            'al' => Yii::t('app.member', 'Albania'),
            'dz' => Yii::t('app.member', 'Algeria'),
            'as' => Yii::t('app.member', 'American Samoa'),
            'ad' => Yii::t('app.member', 'Andorra'),
            'ao' => Yii::t('app.member', 'Angola'),
            'ai' => Yii::t('app.member', 'Anguilla'),
            'aq' => Yii::t('app.member', 'Antarctica'),
            'ag' => Yii::t('app.member', 'Antigua and Barbuda'),
            'ar' => Yii::t('app.member', 'Argentina'),
            'am' => Yii::t('app.member', 'Armenia'),
            'aw' => Yii::t('app.member', 'Aruba'),
            'au' => Yii::t('app.member', 'Australia'),
            'at' => Yii::t('app.member', 'Austria'),
            'az' => Yii::t('app.member', 'Azerbaijan'),
            'bs' => Yii::t('app.member', 'Bahamas'),
            'bh' => Yii::t('app.member', 'Bahrain'),
            'bd' => Yii::t('app.member', 'Bangladesh'),
            'bb' => Yii::t('app.member', 'Barbados'),
            'be' => Yii::t('app.member', 'Belgium'),
            'bz' => Yii::t('app.member', 'Belize'),
            'bj' => Yii::t('app.member', 'Benin'),
            'bm' => Yii::t('app.member', 'Bermuda'),
            'bt' => Yii::t('app.member', 'Bhutan'),
            'bo' => Yii::t('app.member', 'Bolivia, Plurinational State of'),
            'bq' => Yii::t('app.member', 'Bonaire, Sint Eustatius and Saba'),
            'ba' => Yii::t('app.member', 'Bosnia and Herzegovina'),
            'bw' => Yii::t('app.member', 'Botswana'),
            'bv' => Yii::t('app.member', 'Bouvet Island'),
            'br' => Yii::t('app.member', 'Brazil'),
            'io' => Yii::t('app.member', 'British Indian Ocean Territory'),
            'bn' => Yii::t('app.member', 'Brunei Darussalam'),
            'bg' => Yii::t('app.member', 'Bulgaria'),
            'bf' => Yii::t('app.member', 'Burkina Faso'),
            'bi' => Yii::t('app.member', 'Burundi'),
            'kh' => Yii::t('app.member', 'Cambodia'),
            'cm' => Yii::t('app.member', 'Cameroon'),
            'ca' => Yii::t('app.member', 'Canada'),
            'cv' => Yii::t('app.member', 'Cape Verde'),
            'ky' => Yii::t('app.member', 'Cayman Islands'),
            'cf' => Yii::t('app.member', 'Central African Republic'),
            'td' => Yii::t('app.member', 'Chad'),
            'cl' => Yii::t('app.member', 'Chile'),
            'cn' => Yii::t('app.member', 'China'),
            'cx' => Yii::t('app.member', 'Christmas Island'),
            'cc' => Yii::t('app.member', 'Cocos (Keeling) Islands'),
            'co' => Yii::t('app.member', 'Colombia'),
            'km' => Yii::t('app.member', 'Comoros'),
            'cg' => Yii::t('app.member', 'Congo'),
            'cd' => Yii::t('app.member', 'Congo, The Democratic Republic of the'),
            'ck' => Yii::t('app.member', 'Cook Islands'),
            'cr' => Yii::t('app.member', 'Costa Rica'),
            'ci' => Yii::t('app.member', 'Cote d`Ivoire'),
            'hr' => Yii::t('app.member', 'Croatia'),
            'cu' => Yii::t('app.member', 'Cuba'),
            'cw' => Yii::t('app.member', 'Curacao'),
            'cy' => Yii::t('app.member', 'Cyprus'),
            'cz' => Yii::t('app.member', 'Czech Republic'),
            'dk' => Yii::t('app.member', 'Denmark'),
            'dj' => Yii::t('app.member', 'Djibouti'),
            'dm' => Yii::t('app.member', 'Dominica'),
            'do' => Yii::t('app.member', 'Dominican Republic'),
            'ec' => Yii::t('app.member', 'Ecuador'),
            'eg' => Yii::t('app.member', 'Egypt'),
            'sv' => Yii::t('app.member', 'El Salvador'),
            'gq' => Yii::t('app.member', 'Equatorial Guinea'),
            'er' => Yii::t('app.member', 'Eritrea'),
            'ee' => Yii::t('app.member', 'Estonia'),
            'et' => Yii::t('app.member', 'Ethiopia'),
            'fk' => Yii::t('app.member', 'Falkland Islands (Malvinas)'),
            'fo' => Yii::t('app.member', 'Faroe Islands'),
            'fj' => Yii::t('app.member', 'Fiji'),
            'fi' => Yii::t('app.member', 'Finland'),
            'fr' => Yii::t('app.member', 'France'),
            'gf' => Yii::t('app.member', 'French Guiana'),
            'pf' => Yii::t('app.member', 'French Polynesia'),
            'tf' => Yii::t('app.member', 'French Southern Territories'),
            'ga' => Yii::t('app.member', 'Gabon'),
            'gm' => Yii::t('app.member', 'Gambia'),
            'ge' => Yii::t('app.member', 'Georgia'),
            'de' => Yii::t('app.member', 'Germany'),
            'gh' => Yii::t('app.member', 'Ghana'),
            'gi' => Yii::t('app.member', 'Gibraltar'),
            'gr' => Yii::t('app.member', 'Greece'),
            'gl' => Yii::t('app.member', 'Greenland'),
            'gd' => Yii::t('app.member', 'Grenada'),
            'gp' => Yii::t('app.member', 'Guadeloupe'),
            'gu' => Yii::t('app.member', 'Guam'),
            'gt' => Yii::t('app.member', 'Guatemala'),
            'gg' => Yii::t('app.member', 'Guernsey'),
            'gn' => Yii::t('app.member', 'Guinea'),
            'gw' => Yii::t('app.member', 'Guinea-Bissau'),
            'gy' => Yii::t('app.member', 'Guyana'),
            'ht' => Yii::t('app.member', 'Haiti'),
            'hm' => Yii::t('app.member', 'Heard Island and McDonald Islands'),
            'va' => Yii::t('app.member', 'Holy See (Vatican City State)'),
            'hn' => Yii::t('app.member', 'Honduras'),
            'hk' => Yii::t('app.member', 'Hong Kong'),
            'hu' => Yii::t('app.member', 'Hungary'),
            'is' => Yii::t('app.member', 'Iceland'),
            'in' => Yii::t('app.member', 'India'),
            'id' => Yii::t('app.member', 'Indonesia'),
            'ir' => Yii::t('app.member', 'Iran, Islamic Republic of'),
            'iq' => Yii::t('app.member', 'Iraq'),
            'ie' => Yii::t('app.member', 'Ireland'),
            'im' => Yii::t('app.member', 'Isle of Man'),
            'il' => Yii::t('app.member', 'Israel'),
            'it' => Yii::t('app.member', 'Italy'),
            'jm' => Yii::t('app.member', 'Jamaica'),
            'jp' => Yii::t('app.member', 'Japan'),
            'je' => Yii::t('app.member', 'Jersey'),
            'jo' => Yii::t('app.member', 'Jordan'),
            'ke' => Yii::t('app.member', 'Kenya'),
            'ki' => Yii::t('app.member', 'Kiribati'),
            'kp' => Yii::t('app.member', 'Korea, Democratic People`s Republic of'),
            'kr' => Yii::t('app.member', 'Korea, Republic of'),
            'kw' => Yii::t('app.member', 'Kuwait'),
            'kg' => Yii::t('app.member', 'Kyrgyzstan'),
            'la' => Yii::t('app.member', 'Lao People`s Democratic Republic'),
            'lv' => Yii::t('app.member', 'Latvia'),
            'lb' => Yii::t('app.member', 'Lebanon'),
            'ls' => Yii::t('app.member', 'Lesotho'),
            'lr' => Yii::t('app.member', 'Liberia'),
            'ly' => Yii::t('app.member', 'Libyan Arab Jamahiriya'),
            'li' => Yii::t('app.member', 'Liechtenstein'),
            'lt' => Yii::t('app.member', 'Lithuania'),
            'lu' => Yii::t('app.member', 'Luxembourg'),
            'mo' => Yii::t('app.member', 'Macao'),
            'mk' => Yii::t('app.member', 'Macedonia, The former Yugoslav Republic of'),
            'mg' => Yii::t('app.member', 'Madagascar'),
            'mw' => Yii::t('app.member', 'Malawi'),
            'my' => Yii::t('app.member', 'Malaysia'),
            'mv' => Yii::t('app.member', 'Maldives'),
            'ml' => Yii::t('app.member', 'Mali'),
            'mt' => Yii::t('app.member', 'Malta'),
            'mh' => Yii::t('app.member', 'Marshall Islands'),
            'mq' => Yii::t('app.member', 'Martinique'),
            'mr' => Yii::t('app.member', 'Mauritania'),
            'mu' => Yii::t('app.member', 'Mauritius'),
            'yt' => Yii::t('app.member', 'Mayotte'),
            'mx' => Yii::t('app.member', 'Mexico'),
            'fm' => Yii::t('app.member', 'Micronesia, Federated States of'),
            'md' => Yii::t('app.member', 'Moldova, Republic of'),
            'mc' => Yii::t('app.member', 'Monaco'),
            'mn' => Yii::t('app.member', 'Mongolia'),
            'me' => Yii::t('app.member', 'Montenegro'),
            'ms' => Yii::t('app.member', 'Montserrat'),
            'ma' => Yii::t('app.member', 'Morocco'),
            'mz' => Yii::t('app.member', 'Mozambique'),
            'mm' => Yii::t('app.member', 'Myanmar'),
            'na' => Yii::t('app.member', 'Namibia'),
            'nr' => Yii::t('app.member', 'Nauru'),
            'np' => Yii::t('app.member', 'Nepal'),
            'nl' => Yii::t('app.member', 'Netherlands'),
            'nc' => Yii::t('app.member', 'New Caledonia'),
            'nz' => Yii::t('app.member', 'New Zealand'),
            'ni' => Yii::t('app.member', 'Nicaragua'),
            'ne' => Yii::t('app.member', 'Niger'),
            'ng' => Yii::t('app.member', 'Nigeria'),
            'nu' => Yii::t('app.member', 'Niue'),
            'nf' => Yii::t('app.member', 'Norfolk Island'),
            'mp' => Yii::t('app.member', 'Northern Mariana Islands'),
            'no' => Yii::t('app.member', 'Norway'),
            'om' => Yii::t('app.member', 'Oman'),
            'pk' => Yii::t('app.member', 'Pakistan'),
            'pw' => Yii::t('app.member', 'Palau'),
            'ps' => Yii::t('app.member', 'Palestinian Territory, Occupied'),
            'pa' => Yii::t('app.member', 'Panama'),
            'pg' => Yii::t('app.member', 'Papua New Guinea'),
            'py' => Yii::t('app.member', 'Paraguay'),
            'pe' => Yii::t('app.member', 'Peru'),
            'ph' => Yii::t('app.member', 'Philippines'),
            'pn' => Yii::t('app.member', 'Pitcairn'),
            'pl' => Yii::t('app.member', 'Poland'),
            'pt' => Yii::t('app.member', 'Portugal'),
            'pr' => Yii::t('app.member', 'Puerto Rico'),
            'qa' => Yii::t('app.member', 'Qatar'),
            're' => Yii::t('app.member', 'Reunion'),
            'ro' => Yii::t('app.member', 'Romania'),
            'rw' => Yii::t('app.member', 'Rwanda'),
            'bl' => Yii::t('app.member', 'Saint Barthelemy'),
            'sh' => Yii::t('app.member', 'Saint Helena, Ascension and Tristan Da Cunha'),
            'kn' => Yii::t('app.member', 'Saint Kitts and Nevis'),
            'lc' => Yii::t('app.member', 'Saint Lucia'),
            'mf' => Yii::t('app.member', 'Saint Martin (French Part)'),
            'pm' => Yii::t('app.member', 'Saint Pierre and Miquelon'),
            'vc' => Yii::t('app.member', 'Saint Vincent and The Grenadines'),
            'ws' => Yii::t('app.member', 'Samoa'),
            'sm' => Yii::t('app.member', 'San Marino'),
            'st' => Yii::t('app.member', 'Sao Tome and Principe'),
            'sa' => Yii::t('app.member', 'Saudi Arabia'),
            'sn' => Yii::t('app.member', 'Senegal'),
            'rs' => Yii::t('app.member', 'Serbia'),
            'sc' => Yii::t('app.member', 'Seychelles'),
            'sl' => Yii::t('app.member', 'Sierra Leone'),
            'sg' => Yii::t('app.member', 'Singapore'),
            'sx' => Yii::t('app.member', 'Sint Maarten (Dutch Part)'),
            'sk' => Yii::t('app.member', 'Slovakia'),
            'si' => Yii::t('app.member', 'Slovenia'),
            'sb' => Yii::t('app.member', 'Solomon Islands'),
            'so' => Yii::t('app.member', 'Somalia'),
            'za' => Yii::t('app.member', 'South Africa'),
            'gs' => Yii::t('app.member', 'South Georgia and The South Sandwich Islands'),
            'ss' => Yii::t('app.member', 'South Sudan'),
            'es' => Yii::t('app.member', 'Spain'),
            'lk' => Yii::t('app.member', 'Sri Lanka'),
            'sd' => Yii::t('app.member', 'Sudan'),
            'sr' => Yii::t('app.member', 'Suriname'),
            'sj' => Yii::t('app.member', 'Svalbard and Jan Mayen'),
            'sz' => Yii::t('app.member', 'Swaziland'),
            'se' => Yii::t('app.member', 'Sweden'),
            'ch' => Yii::t('app.member', 'Switzerland'),
            'sy' => Yii::t('app.member', 'Syrian Arab Republic'),
            'tw' => Yii::t('app.member', 'Taiwan, Province of China'),
            'tj' => Yii::t('app.member', 'Tajikistan'),
            'tz' => Yii::t('app.member', 'Tanzania, United Republic of'),
            'th' => Yii::t('app.member', 'Thailand'),
            'tl' => Yii::t('app.member', 'Timor-Leste'),
            'tg' => Yii::t('app.member', 'Togo'),
            'tk' => Yii::t('app.member', 'Tokelau'),
            'to' => Yii::t('app.member', 'Tonga'),
            'tt' => Yii::t('app.member', 'Trinidad and Tobago'),
            'tn' => Yii::t('app.member', 'Tunisia'),
            'tr' => Yii::t('app.member', 'Turkey'),
            'tm' => Yii::t('app.member', 'Turkmenistan'),
            'tc' => Yii::t('app.member', 'Turks and Caicos Islands'),
            'tv' => Yii::t('app.member', 'Tuvalu'),
            'ug' => Yii::t('app.member', 'Uganda'),
            'ae' => Yii::t('app.member', 'United Arab Emirates'),
            'gb' => Yii::t('app.member', 'United Kingdom'),
            'us' => Yii::t('app.member', 'United States'),
            'um' => Yii::t('app.member', 'United States Minor Outlying Islands'),
            'uy' => Yii::t('app.member', 'Uruguay'),
            'uz' => Yii::t('app.member', 'Uzbekistan'),
            'vu' => Yii::t('app.member', 'Vanuatu'),
            've' => Yii::t('app.member', 'Venezuela, Bolivarian Republic of'),
            'vn' => Yii::t('app.member', 'Viet Nam'),
            'vg' => Yii::t('app.member', 'Virgin Islands, British'),
            'vi' => Yii::t('app.member', 'Virgin Islands, U.S.'),
            'wf' => Yii::t('app.member', 'Wallis and Futuna'),
            'eh' => Yii::t('app.member', 'Western Sahara'),
            'ye' => Yii::t('app.member', 'Yemen'),
            'zm' => Yii::t('app.member', 'Zambia'),
            'zw' => Yii::t('app.member', 'Zimbabwe'),
        ];
    }
}
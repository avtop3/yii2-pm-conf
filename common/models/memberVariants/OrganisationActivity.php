<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:02
 */

namespace common\models\memberVariants;

use Yii;

class OrganisationActivity
{
    public static function getList()
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
} 
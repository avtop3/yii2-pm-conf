<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:01
 */

namespace common\models\memberVariants;

use Yii;

class ScienceDegree
{
    public static function getList()
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
} 
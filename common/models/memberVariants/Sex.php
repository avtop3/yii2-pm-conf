<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13.11.2016
 * Time: 12:25
 */

namespace common\models\memberVariants;

class Sex
{
    const MALE = 'male';
    const FEMALE = 'female';
    const NOT_SET = 'not set';

    public static function getList()
    {
        return [
            Sex::NOT_SET,
            Sex::MALE,
            Sex::FEMALE,
        ];
    }

    public static function getListWitLabel()
    {
        return [
            Sex::NOT_SET => \Yii::t('app.sex', Sex::NOT_SET),
            Sex::MALE => \Yii::t('app.sex', Sex::MALE),
            Sex::FEMALE => \Yii::t('app.sex', Sex::FEMALE),
        ];
    }
} 
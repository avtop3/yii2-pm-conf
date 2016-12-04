<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 14:59
 */

namespace common\models\memberVariants;

use Yii;

class Currency
{
    const UAH = 'uah';
    const USD = 'usd';
    const RUB = 'rub';

    public static function getList()
    {
        return [
            'uah' => Yii::t('app', 'UAH'),
            'usd' => Yii::t('app', 'USD'),
            'rub' => Yii::t('app', 'RUB'),
        ];
    }
} 
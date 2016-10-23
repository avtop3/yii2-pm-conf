<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:02
 */

namespace common\models\memberVariants;

use Yii;

class ScienceTitle
{
    public static function getList()
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
} 
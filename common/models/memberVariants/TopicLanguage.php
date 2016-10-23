<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:07
 */

namespace common\models\memberVariants;

use Yii;

class TopicLanguage
{
    public static function getList()
    {
        return [
            Yii::t('app.member', 'English'),
            Yii::t('app.member', 'Ukrainian'),
            Yii::t('app.member', 'Russian'),
        ];
    }
} 
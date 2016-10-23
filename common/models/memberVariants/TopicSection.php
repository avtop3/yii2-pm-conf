<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:07
 */

namespace common\models\memberVariants;

use Yii;

class TopicSection
{
    public static function getList()
    {
        return [
            Yii::t('app.member', 'Plenary Session'),
            Yii::t('app.member', 'Section 1. Integration of Strategic Management with Portfolio, Program and Project Management: Models, Methods and Techniques'),
            Yii::t('app.member', 'Section 2. Managing ІТ Projects'),
            Yii::t('app.member', 'Section 3. Application of Effective Management Technologies in Practice'),
        ];
    }
} 
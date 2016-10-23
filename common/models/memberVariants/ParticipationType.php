<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.10.2016
 * Time: 15:02
 */

namespace common\models\memberVariants;

use Yii;

class ParticipationType
{
    const LISTENER = 'listener';
    const SPEAKER = 'speaker';

    public static function getList()
    {
        return [
            self::LISTENER => Yii::t('app.member', 'I will participate as <b>Listener</b>'),
            self::SPEAKER => Yii::t('app.member', 'I will participate as <b>Speaker</b>')
        ];
    }

    public static function getParticipationTypeVariants()
    {
        return [
            self::LISTENER => Yii::t('app.member', 'Listener'),
            self::SPEAKER => Yii::t('app.member', 'Speaker')
        ];
    }
}
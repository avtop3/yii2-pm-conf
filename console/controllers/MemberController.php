<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.10.2016
 * Time: 20:42
 */

namespace console\controllers;

use common\models\Member;
use yii\console\Controller;
use yii\helpers\Console;

class MemberController extends Controller
{
    public function actionLast()
    {
        $membersCount = Member::getMembersWhoWaitingForConfirmEmail()->count();

        \Yii::$app->mailer
            ->compose('new-members', ['membersCount' => $membersCount])
            ->setTo([
                \Yii::$app->params['adminEmail'],
//                \Yii::$app->params['supportEmail']
            ])
            ->setFrom(\Yii::$app->params['smtpEmail'])
            ->setSubject(sprintf('(%d) New members everyday notification', $membersCount))
            ->send();

        echo $membersCount . ' new member(s) are waiting for confirm email' . PHP_EOL;
    }
} 
<?php

use yii\db\Migration;

class m161023_161722_add_invite_sent_at_field_to_member extends Migration
{
    public function up()
    {
        $this->addColumn(\common\models\Member::tableName(), 'inviteSentAt', 'INT');

        $allMembers = \common\models\Member::findAll(['inviteSentAt' => NULL]);
        foreach($allMembers as $member){
            $member->inviteSentAt = $member->created_at;
            $member->save();
        }
    }

    public function down()
    {
        echo "m161023_161722_add_invite_sent_at_field_to_member cannot be reverted.\n";
    }
}

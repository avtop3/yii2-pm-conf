<?php

use yii\db\Migration;
use common\models\Member;

class m161113_095937_add_sex_field_to_member extends Migration
{
    public function up()
    {
        $this->addColumn(Member::tableName(), 'sex', 'ENUM(\'male\', \'female\', \'not-set\') NOT NULL DEFAULT \'not-set\'');
    }

    public function down()
    {
        $this->dropColumn(Member::tableName(), 'sex');
    }
}

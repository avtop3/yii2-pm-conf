<?php

use yii\db\Migration;

class m161113_201035_drop_DBDataSource_tables extends Migration
{
    public function up()
    {
        $this->dropTable('language_translate');
        $this->dropTable('language_source');
        $this->dropTable('language');
    }

    public function down()
    {
        echo "m161113_201035_drop_DBDataSource_tables cannot be reverted.\n";

        return false;
    }
}

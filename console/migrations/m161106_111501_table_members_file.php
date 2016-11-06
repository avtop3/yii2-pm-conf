<?php

use yii\db\Migration;

class m161106_111501_table_members_file extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `members_file` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `member_id` INT(11) NOT NULL DEFAULT '0',
                `path` VARCHAR(250) NOT NULL DEFAULT '0',
                `type` ENUM('invite','certificate') NOT NULL DEFAULT 'invite',
                PRIMARY KEY (`id`),
                UNIQUE INDEX `path` (`path`),
                INDEX `member_id` (`member_id`),
                CONSTRAINT `FK_members_file_member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=4;
            ");
    }

    public function down()
    {
        $this->dropTable('members_file');
    }
}

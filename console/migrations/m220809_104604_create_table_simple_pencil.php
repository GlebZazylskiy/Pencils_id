<?php

use yii\db\Migration;

/**
 * Class m220809_104604_create_table_simple_pencil
 */
class m220809_104604_create_table_simple_pencil extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute("CREATE TABLE `simple_pencil` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'создано',
                `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'обновлено',
                PRIMARY KEY (`id`) USING BTREE
            )
            COMMENT='простой карандаш'
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=3
            ;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220809_104604_create_table_simple_pencil cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220809_104604_create_table_simple_pencil cannot be reverted.\n";

        return false;
    }
    */
}

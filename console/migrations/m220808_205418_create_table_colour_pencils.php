<?php

use yii\db\Migration;

/**
 * Class m220808_205418_create_table_colour_pencils
 */
class m220808_205418_create_table_colour_pencils extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute("CREATE TABLE `colour_pencils` (
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'создано',
                `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'обновлено',
                PRIMARY KEY (`id`) USING BTREE
            )
            COMMENT='цветный карандаши'
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            ;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220808_205418_create_table_colour_pencils cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220808_205418_create_table_colour_pencils cannot be reverted.\n";

        return false;
    }
    */
}

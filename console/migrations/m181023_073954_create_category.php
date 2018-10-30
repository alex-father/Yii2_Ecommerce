<?php

use yii\db\Migration;

/**
 * Class m181023_073954_create_category
 */
class m181023_073954_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('category', [
            'id' => $this->primarykey(),
            'name' => $this->string(200)->notNull(),
            'description' => $this->text()->notNull(),
            
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181023_073954_create_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_073954_create_category cannot be reverted.\n";

        return false;
    }
    */
}

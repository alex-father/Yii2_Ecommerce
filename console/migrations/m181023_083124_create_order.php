<?php

use yii\db\Migration;

/**
 * Class m181023_083124_create_order
 */
class m181023_083124_create_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {


        $this->createTable('order', [
            'id' => $this->primarykey(),
            'order_date' => $this->integer()->notNull(),
            'address' => $this ->text(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            
           ]);
    

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181023_083124_create_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_083124_create_order cannot be reverted.\n";

        return false;
    }
    */
}

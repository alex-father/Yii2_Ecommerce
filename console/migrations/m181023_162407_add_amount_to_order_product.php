<?php

use yii\db\Migration;

/**
 * Class m181023_162407_add_amount_to_order_product
 */
class m181023_162407_add_amount_to_order_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this ->addColumn('order_product','amount', $this->integer()->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('order_product', 'amount');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_162407_add_amount_to_order_product cannot be reverted.\n";

        return false;
    }
    */
}

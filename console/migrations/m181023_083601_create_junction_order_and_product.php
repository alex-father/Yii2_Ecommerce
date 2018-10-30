<?php

use yii\db\Migration;

/**
 * Class m181023_083601_create_junction_order_and_product
 */
class m181023_083601_create_junction_order_and_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('order_product', [
           
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'price'=> $this->integer()->notNull(),
            'PRIMARY KEY (order_id, product_id)',
           ]);

        $this->createIndex(
         'idx-order_product-order_id', 
         'order_product', 
         'order_id'

        );

        $this->addForeignKey(
            'fk-order_product-order_id', 
            'order_product', 
            'order_id',
            'order', 
            'id', 
            'CASCADE'
        );


        $this->createIndex(
         'idx-order_product-product_id', 
         'order_product', 
         'product_id'

        );

        $this->addForeignKey(
            'fk-order_product-product_id', 
            'order_product', 
            'product_id',
            'product', 
            'id', 
            'CASCADE'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function Down()
    {

        $this->dropForeignKey(
         'fk-order_product-order_id', 
         'order_product'

        );

        $this->dropIndex(
         'idx-order_product-order_id', 
         'order_product'


        );

        $this->dropForeignKey(
         'fk-order_product-product_id', 
         'order_product'

        );

        $this->dropIndex(
         'idx-order_product-product_id', 
         'order_product'


        );
        echo "m181023_083601_create_junction_order_and_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_083601_create_junction_order_and_product cannot be reverted.\n";

        return false;
    }
    */
}

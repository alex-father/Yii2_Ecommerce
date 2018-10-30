<?php

use yii\db\Migration;

/**
 * Class m181023_074633_create_product
 */
class m181023_074633_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('product', [
            'id' => $this->primarykey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this ->text()->notNull(),
            'price'  => $this -> integer()->notNull(),
            'created_by'  => $this -> integer()->notNull(),
            'created_at'  => $this -> integer()->notNull(),
            'updated_by'  => $this -> integer()->notNull(),
            'updated_at' => $this-> integer()->notNull(),
            
        ]);
        
        $this ->createIndex(
            'idx_product-category_id',
             'product',
              'category_id'
          );


        $this -> addForeignKey(
             'fk-product-category_id',
             'product',
             'category_id',
             'category',
             'id',
             'CASCADE'
          );

        $this ->createIndex(
            'idx_product-created_by',
            'product',
            'created_by'
          );

         $this -> addForeignKey(
              'fk-product-created_by',
              'product',
              'created_by',
              'user',
              'id',
              'CASCADE'
          );

         $this ->createIndex(
            'idx_product-updated_by',
             'product',
              'updated_by'
          );

         $this->addForeignKey(
              'fk-product-updated_by',
              'product',
              'updated_by',
              'user',
              'id',
              'CASCADE'
          );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181023_074633_create_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_074633_create_product cannot be reverted.\n";

        return false;
    }
    */
}

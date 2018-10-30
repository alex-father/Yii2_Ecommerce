<?php

use yii\db\Migration;

/**
 * Class m181023_071118_create_profile
 */
class m181023_071118_create_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {

        $this->createTable('profile', [
            'user_id' => $this->integer()->notNull(),
            'firstname' => $this->string(200),
            'lastname' => $this->string(200),
            'address' => $this->text(),
            'avatar' => $this->string(200)
            
        ]);

        $this -> createIndex(
         'idx-profile-user_id',
         'profile',
         'user_id'
          );
        $this ->addForeignKey(
         'fk-profile-user_id',
         'profile',
         'user_id',
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
        echo "m181023_071118_create_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_071118_create_profile cannot be reverted.\n";

        return false;
    }
    */
}

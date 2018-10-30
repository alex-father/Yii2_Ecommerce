<?php

use yii\db\Migration;

/**
 * Class m181023_163941_add_status_to_order
 */
class m181023_163941_add_status_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->addColumn('order','status', $this->integer()->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropColumn('order', 'status');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181023_163941_add_status_to_order cannot be reverted.\n";

        return false;
    }
    */
}

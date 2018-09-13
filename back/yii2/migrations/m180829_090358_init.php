<?php

use yii\db\Migration;

/**
 * Class m180829_090358_init
 */
class m180829_090358_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cools',[
            'id'=>$this->primaryKey(),
            'text'=>$this->text(),
            'date'=>$this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180829_090358_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180829_090358_init cannot be reverted.\n";

        return false;
    }
    */
}

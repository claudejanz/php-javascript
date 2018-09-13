<?php

use yii\db\Migration;

/**
 * Class m180911_134834_cool
 */
class m180911_134834_cool extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cool',[
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'summary' => $this->text(),
            'date'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180911_134834_cool cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180911_134834_cool cannot be reverted.\n";

        return false;
    }
    */
}

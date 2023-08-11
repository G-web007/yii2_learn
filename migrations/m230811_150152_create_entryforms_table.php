<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%entryforms}}`.
 */
class m230811_150152_create_entryforms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%entryforms}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%entryforms}}');
    }
}

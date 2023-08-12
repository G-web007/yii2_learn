<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m230811_164036_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'code' => $this->char(2)->notNull()->append('PRIMARY KEY'),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}

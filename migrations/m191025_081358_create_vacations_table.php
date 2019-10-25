<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacations}}`.
 */
class m191025_081358_create_vacations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacations}}', [
            'id'         => $this->primaryKey(),
            'user_id'    => $this->integer()->notNull(),
            'begin'      => $this->date()->notNull(),
            'end'        => $this->date()->notNull(),
            'status'     => $this->integer()->notNull(),
            'updated_at' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'created'    => 'DATETIME DEFAULT NOW()',
        ]);
        //create index for user_id
        $this->createIndex(
            'user_id_in_vacations',
            'vacations',
            'user_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vacations}}');
    }
}

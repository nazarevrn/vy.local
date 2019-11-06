<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m191106_120025_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'login'      => $this->string()->notNull(),
            'password'  => $this->string()->notNull(),
            'salt'       => $this->string()->notNull(),
            'email'      => $this->string()->notNull(),
            'surname'    => $this->string()->notNull(),
            'name'       => $this->string()->notNull(),
            'middle_name'=> $this->string(),
            'updated_at' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'created'    => 'DATETIME DEFAULT NOW()',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}

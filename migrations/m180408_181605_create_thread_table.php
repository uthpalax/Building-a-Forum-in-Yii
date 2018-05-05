<?php

use yii\db\Migration;

/**
 * Handles the creation of table `thread`.
 */
class m180408_181605_create_thread_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('thread', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(), 
            'body' => $this->text(), 
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null)
        ]);

        // create index for user_id column
        $this->createIndex(
            'idx-thread-user_id',
            'thread',
            'user_id'
        );

        // create foreign ke 
        $this->addForeignKey(
            'fk-thread-user_id',
            'thread', 
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
        $this->dropForeignKey(
            'fk-thread-user_id',
            'thread'
        );

        $this->dropIndex(
            'idx-thread-user_id',
            'thread'
        );
        $this->dropTable('thread');
    }
}

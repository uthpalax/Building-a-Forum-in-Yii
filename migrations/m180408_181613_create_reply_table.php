<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reply`.
 */
class m180408_181613_create_reply_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reply', [
            'id' => $this->primaryKey(),
            'thread_id' => $this->integer()->notNull(), 
            'user_id' => $this->integer()->notNull(),
            'body' => $this->text(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null)
        ]);

        // create index for user_id column
        $this->createIndex(
            'idx-reply-user_id',
            'reply',
            'user_id'
        );

        // create foreign ke 
        $this->addForeignKey(
            'fk-reply-user_id',
            'reply', 
            'user_id', 
            'user', 
            'id',
            'CASCADE'
        );

        // create index for user_id column
        $this->createIndex(
            'idx-reply-thread_id',
            'reply',
            'thread_id'
        );

        // create foreign key 
        $this->addForeignKey(
            'fk-reply-thread_id',
            'reply', 
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
            'fk-reply-user_id',
            'reply'
        );

        $this->dropIndex(
            'idx-reply-user_id',
            'reply'
        );

        $this->dropForeignKey(
            'fk-reply-thread_id',
            'reply'
        );

        $this->dropIndex(
            'idx-reply-thread_id',
            'reply'
        );
        $this->dropTable('reply');
    }
}

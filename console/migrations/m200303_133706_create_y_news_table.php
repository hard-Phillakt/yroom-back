<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_news}}`.
 */
class m200303_133706_create_y_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->string(255),
            'meta_title' => $this->string(255),
            'meta_description' => $this->string(255),
            'img_prev' => $this->string(255),
            'essence' => $this->string(255),
            'date' => $this->string(10),
            'published' => $this->integer(1),
            'prioritet' => $this->integer(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%y_news}}');
    }
}

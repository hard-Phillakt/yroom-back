<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_slider}}`.
 */
class m200317_141456_create_y_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_slider}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'slug' => $this->string(255),
            'description' => $this->string(255),
            'published' => $this->integer(1),
            'prioritet' => $this->integer(255),
            'date' => $this->integer(10),
            'img' => $this->string(255),
            'title_link' => $this->string(255),
            'link' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%y_slider}}');
    }
}

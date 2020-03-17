<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_category}}`.
 */
class m200317_125110_create_y_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'slug' => $this->string(255),
            'published' => $this->integer(1),
            'prioritet' => $this->integer(100),
            'img_prev' => $this->string(255),
            'link' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%y_category}}');
    }
}

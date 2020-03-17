<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_stock}}`.
 */
class m200303_133902_create_y_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_stock}}', [
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
        $this->dropTable('{{%y_stock}}');
    }
}

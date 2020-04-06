<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_product}}`.
 */
class m200303_131722_create_y_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'description' => $this->text(),
            'meta_title' => $this->string(255),
            'meta_description' => $this->string(255),
            'price' => $this->integer(10),
            'category_id' => $this->integer(255),
            'slug' => $this->string(255),
            'is_new' => $this->string(10),
            'is_hit' => $this->string(10),
            'discount_id' => $this->integer(255),
            'published' => $this->integer(1),
            'prioritet' => $this->integer(1),
            'img_prev' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%y_product}}');
    }
}

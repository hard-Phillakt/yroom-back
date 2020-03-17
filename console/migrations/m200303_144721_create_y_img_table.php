<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%y_img}}`.
 */
class m200303_144721_create_y_img_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%y_img}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
            'date' => $this->string(10),
            'published' => $this->integer(1),
            'parent_id' => $this->integer(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%y_img}}');
    }
}

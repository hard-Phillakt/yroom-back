<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%y_stock}}`.
 */
class m200318_143447_add_slug_column_to_y_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%y_stock}}', 'slug', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%y_stock}}', 'slug');
    }
}

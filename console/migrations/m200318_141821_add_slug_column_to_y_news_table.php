<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%y_news}}`.
 */
class m200318_141821_add_slug_column_to_y_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%y_news}}', 'slug', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%y_news}}', 'slug');
    }
}

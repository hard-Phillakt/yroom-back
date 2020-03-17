<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "y_slider".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $img
 * @property string|null $date
 * @property int|null $published
 * @property int|null $prioritet
 */
class YSlider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'y_slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published', 'prioritet'], 'integer'],
            [['title', 'description', 'img'], 'string', 'max' => 255],
            [['date'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'img' => 'Картинка',
            'date' => 'Дата',
            'published' => 'Публикация',
            'prioritet' => 'Приоритет',
        ];
    }
}

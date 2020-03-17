<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "y_img".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $date
 * @property int|null $published
 * @property int|null $parent_id
 */
class YImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'y_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published', 'parent_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
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
            'img' => 'Превью картинки',
            'date' => 'Дата',
            'published' => 'Публикация',
            'parent_id' => 'Id родителя',
        ];
    }
}

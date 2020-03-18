<?php

namespace backend\models;

use Yii;

use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "y_slider".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property int|null $published
 * @property int|null $prioritet
 * @property int|null $date
 * @property string|null $img
 * @property string|null $title_link
 * @property string|null $link
 */
class YSlider extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
            ],
        ];
    }

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
            [['published', 'prioritet',], 'integer'],
            [['title', 'slug', 'description', 'img', 'title_link', 'link'], 'string', 'max' => 255],
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
            'slug' => 'Альт название',
            'description' => 'Описание',
            'published' => 'Публикация',
            'prioritet' => 'Приоритет',
            'date' => 'Дата',
            'img' => 'Превью картинки',
            'title_link' => 'Заголовок ссылки',
            'link' => 'Ссылки',
        ];
    }
}

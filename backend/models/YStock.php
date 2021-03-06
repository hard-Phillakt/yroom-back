<?php

namespace backend\models;

use Yii;

use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "y_stock".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $img_prev
 * @property string|null $essence
 * @property string|null $date
 * @property int|null $published
 * @property int|null $prioritet
 */

class YStock extends \yii\db\ActiveRecord
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
        return 'y_stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published', 'prioritet'], 'integer'],
            [['title', 'description', 'meta_title', 'meta_description', 'img_prev', 'essence'], 'string', 'max' => 255],
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
            'meta_title' => 'Мета Заголовок',
            'meta_description' => 'Мета Описание',
            'img_prev' => 'Картинка',
            'essence' => 'Сущность',
            'date' => 'Дата',
            'published' => 'Публикация',
            'prioritet' => 'Приоритет',
            'slug' => 'Альт название',
        ];
    }
}

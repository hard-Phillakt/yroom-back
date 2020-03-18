<?php

namespace backend\models;

use Yii;

use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "y_category".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property int|null $published
 * @property int|null $prioritet
 * @property string|null $img_prev
 * @property string|null $link
 */
class YCategory extends \yii\db\ActiveRecord
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
        return 'y_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published', 'prioritet'], 'integer'],
            [['title', 'slug', 'img_prev', 'link'], 'string', 'max' => 255],
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
            'published' => 'Публикация',
            'prioritet' => 'Приоритет',
            'img_prev' => 'Превью картинка',
            'link' => 'Ссылка',
        ];
    }
}

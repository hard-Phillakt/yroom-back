<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "y_product".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property int|null $price
 * @property int|null $category_id
 * @property string|null $slug
 * @property string|null $is_new
 * @property string|null $is_hit
 * @property int|null $discount_id
 * @property int|null $published
 * @property int|null $prioritet
 * @property string|null $img_prev
 */
class YProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'y_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'category_id', 'discount_id', 'published', 'prioritet'], 'integer'],
            [['title', 'description', 'meta_title', 'meta_description', 'slug', 'img_prev'], 'string', 'max' => 255],
            [['is_new', 'is_hit'], 'string', 'max' => 10],
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
            'price' => 'Цена',
            'category_id' => 'Категория Id',
            'slug' => 'Альт описание',
            'is_new' => 'Новинка',
            'is_hit' => 'Хит',
            'discount_id' => 'Скидка',
            'published' => 'Публикация',
            'prioritet' => 'Приоритет',
            'img_prev' => 'Превью картинки',
        ];
    }
}

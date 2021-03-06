<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\YStock;

/**
 * YStockSearch represents the model behind the search form of `backend\models\YStock`.
 */
class YStockSearch extends YStock
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'published', 'prioritet'], 'integer'],
            [['title', 'description', 'meta_title', 'meta_description', 'img_prev', 'essence', 'date', 'slug'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = YStock::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'published' => $this->published,
            'prioritet' => $this->prioritet,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'img_prev', $this->img_prev])
            ->andFilterWhere(['like', 'essence', $this->essence])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['slug', 'date', $this->date]);

        return $dataProvider;
    }
}

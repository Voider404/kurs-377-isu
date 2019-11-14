<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * NewsSearch represents the model behind the search form of `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'news_author'], 'integer'],
            [['news_name', 'news_text', 'news_img', 'news_category', 'news_date'], 'safe'],
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
        $query = News::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'news_id' => $this->news_id,
            'news_author' => $this->news_author,
            'news_date' => $this->news_date,
        ]);

        $query->andFilterWhere(['like', 'news_name', $this->news_name])
            ->andFilterWhere(['like', 'news_text', $this->news_text])
            ->andFilterWhere(['like', 'news_img', $this->news_img])
            ->andFilterWhere(['like', 'news_category', $this->news_category]);

        return $dataProvider;
    }
}

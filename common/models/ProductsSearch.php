<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'title', 'summary', 'home', 'titleFontColor', 'created_at', 'updated_at'], 'safe'],
            [['industryId', 'isRecommend', 'isPassed', 'isOnSale', 'titleFontSize', 'creator', 'editor', 'isDeleted'], 'integer'],
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
        $query = Products::find();

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
            'industryId' => $this->industryId,
            'isRecommend' => $this->isRecommend,
            'isPassed' => $this->isPassed,
            'isOnSale' => $this->isOnSale,
            'titleFontSize' => $this->titleFontSize,
            'creator' => $this->creator,
            'editor' => $this->editor,
            'isDeleted' => $this->isDeleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'home', $this->home])
            ->andFilterWhere(['like', 'titleFontColor', $this->titleFontColor]);

        return $dataProvider;
    }
}

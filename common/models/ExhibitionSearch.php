<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Exhibition;

/**
 * ExhibitionSearch represents the model behind the search form of `common\models\Exhibition`.
 */
class ExhibitionSearch extends Exhibition
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'name', 'summary', 'qualification', 'place', 'contents', 'duration', 'sponsor'], 'safe'],
            [['period', 'industryId', 'isActive', 'exhibitorsNum', 'isDeleted', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
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
        $query = Exhibition::find();

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
            'period' => $this->period,
            'industryId' => $this->industryId,
            'isActive' => $this->isActive,
            'exhibitorsNum' => $this->exhibitorsNum,
            'isDeleted' => $this->isDeleted,
            'creator' => $this->creator,
            'editor' => $this->editor,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'qualification', $this->qualification])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'contents', $this->contents])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'sponsor', $this->sponsor]);

        return $dataProvider;
    }
}

<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LiveAudience;

/**
 * LiveAudienceSearch represents the model behind the search form of `common\models\LiveAudience`.
 */
class LiveAudienceSearch extends LiveAudience
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'liveId', 'userData'], 'safe'],
            [['audienceId', 'status'], 'integer'],
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
        $query = LiveAudience::find();

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
            'audienceId' => $this->audienceId,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'liveId', $this->liveId])
            ->andFilterWhere(['like', 'userData', $this->userData]);

        return $dataProvider;
    }
}

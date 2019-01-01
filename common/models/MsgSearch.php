<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Msg;

/**
 * MsgSearch represents the model behind the search form of `common\models\Msg`.
 */
class MsgSearch extends Msg
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'scene', 'content'], 'safe'],
            [['ownerId', 'senderId', 'created_at'], 'integer'],
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
        $query = Msg::find();

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
            'ownerId' => $this->ownerId,
            'senderId' => $this->senderId,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'scene', $this->scene])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}

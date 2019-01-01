<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ExhibitionCenter;

/**
 * ExhibitionCenterSearch represents the model behind the search form of `common\models\ExhibitionCenter`.
 */
class ExhibitionCenterSearch extends ExhibitionCenter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'exhibitionId', 'centerName', 'summary'], 'safe'],
            [['industryId', 'roomLimit', 'isDeleted', 'creator', 'editor', 'created_at', 'updated_at'], 'integer'],
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
        $query = ExhibitionCenter::find();

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
            'roomLimit' => $this->roomLimit,
            'isDeleted' => $this->isDeleted,
            'creator' => $this->creator,
            'editor' => $this->editor,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'exhibitionId', $this->exhibitionId])
            ->andFilterWhere(['like', 'centerName', $this->centerName])
            ->andFilterWhere(['like', 'summary', $this->summary]);

        return $dataProvider;
    }
}
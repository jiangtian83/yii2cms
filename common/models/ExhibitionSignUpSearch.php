<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ExhibitionSignUp;

/**
 * ExhibitionSignUpSearch represents the model behind the search form of `common\models\ExhibitionSignUp`.
 */
class ExhibitionSignUpSearch extends ExhibitionSignUp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guid', 'exhibitionId', 'orginazationName', 'contacts', 'telephone'], 'safe'],
            [['isDeleted'], 'integer'],
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
        $query = ExhibitionSignUp::find();

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
            'isDeleted' => $this->isDeleted,
        ]);

        $query->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'exhibitionId', $this->exhibitionId])
            ->andFilterWhere(['like', 'orginazationName', $this->orginazationName])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'telephone', $this->telephone]);

        return $dataProvider;
    }
}

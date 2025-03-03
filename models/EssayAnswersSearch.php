<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EssayAnswers;

/**
 * EssayAnswersSearch represents the model behind the search form of `app\models\EssayAnswers`.
 */
class EssayAnswersSearch extends EssayAnswers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'question_id', 'nilai'], 'integer'],
            [['jawaban', 'komentar'], 'safe'],
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
        $query = EssayAnswers::find();

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
            'id' => $this->id,
            'student_id' => $this->student_id,
            'question_id' => $this->question_id,
            'nilai' => $this->nilai,
        ]);

        $query->andFilterWhere(['like', 'jawaban', $this->jawaban])
            ->andFilterWhere(['like', 'komentar', $this->komentar]);

        return $dataProvider;
    }
}

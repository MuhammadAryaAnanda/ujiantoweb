<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExamResults;

/**
 * ExamResultsSearch represents the model behind the search form of `app\models\ExamResults`.
 */
class ExamResultsSearch extends ExamResults
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'exam_id', 'student_id', 'skor'], 'integer'],
            [['tanggal_pengerjaan', 'waktu_selesai'], 'safe'],
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
        $query = ExamResults::find();

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
            'exam_id' => $this->exam_id,
            'student_id' => $this->student_id,
            'skor' => $this->skor,
        ]);

        $query->andFilterWhere(['like', 'tanggal_pengerjaan', $this->tanggal_pengerjaan])
            ->andFilterWhere(['like', 'waktu_selesai', $this->waktu_selesai]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Exams;

/**
 * ExamsSearch represents the model behind the search form of `app\models\Exams`.
 */
class ExamsSearch extends Exams
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bidang_id', 'jlh_soal'], 'integer'],
            [['nama_ujian', 'keterangan_ujian', 'tanggal_pelaksanaan_ujian', 'tanggal_selesai_ujian', 'durasi_pengerjaan_ujian'], 'safe'],
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
        $query = Exams::find();

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
            'bidang_id' => $this->bidang_id,
            'tanggal_pelaksanaan_ujian' => $this->tanggal_pelaksanaan_ujian,
            'tanggal_selesai_ujian' => $this->tanggal_selesai_ujian,
            'durasi_pengerjaan_ujian' => $this->durasi_pengerjaan_ujian,
            'jlh_soal' => $this->jlh_soal,
        ]);

        $query->andFilterWhere(['like', 'nama_ujian', $this->nama_ujian])
            ->andFilterWhere(['like', 'keterangan_ujian', $this->keterangan_ujian]);

        return $dataProvider;
    }
}

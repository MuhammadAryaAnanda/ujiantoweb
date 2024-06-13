<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mentors;

/**
 * MentorsSearch represents the model behind the search form of `app\models\Mentors`.
 */
class MentorsSearch extends Mentors
{
    /**
     * {@inheritdoc}
     */
    public $bidang;
    public function rules()
    {
        return [
            [['id', 'bidang_id'], 'integer'],
            [['name', 'nip','bidang', 'date_of_birth', 'email', 'password', 'address', 'expertise'], 'safe'],
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
    // pr
     public function search($params)
    {
        $query = (new \yii\db\Query());
        $query->select('bidangs.nama as bidang, bidangs.id as bidang_id, mentors.*')
        ->from('mentors')
        ->leftJoin('bidangs', 'bidangs.id = mentors.bidang_id');
        $query->all();
        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        // dd($dataProvider->models);

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
            'date_of_birth' => $this->date_of_birth,
        ]);
        // dd($this);
        $query->andFilterWhere(['like', 'mentors.name', $this->name])
            ->andFilterWhere(['like', 'mentors.nip', $this->nip])
            ->andFilterWhere(['like', 'bidangs.nama', $this->bidang])
            ->andFilterWhere(['like', 'mentors.email', $this->email])
            ->andFilterWhere(['like', 'mentors.password', $this->password])
            ->andFilterWhere(['like', 'mentors.address', $this->address])
            ->andFilterWhere(['like', 'mentors.expertise', $this->expertise]);
            // $query->joinWith('bidangs');

        return $dataProvider;
    }
}

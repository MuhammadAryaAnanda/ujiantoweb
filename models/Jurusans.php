<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusans".
 *
 * @property int $id
 * @property string $nama_jurusan
 *
 * @property JurusanBidang[] $jurusanBidangs
 * @property Students[] $students
 */
class Jurusans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jurusan'], 'required'],
            [['nama_jurusan'], 'string', 'max' => 255],
            [['nama_jurusan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jurusan' => 'Nama Jurusan',
        ];
    }

    /**
     * Gets query for [[JurusanBidangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusanBidangs()
    {
        return $this->hasMany(JurusanBidang::class, ['jurusan_id' => 'id']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::class, ['jurusan_id' => 'id']);
    }
}

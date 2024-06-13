<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exams".
 *
 * @property int $id
 * @property string $nama_ujian
 * @property int $bidang_id
 * @property string|null $keterangan_ujian
 * @property string|null $tanggal_pelaksanaan_ujian
 * @property string|null $tanggal_selesai_ujian
 * @property string|null $durasi_pengerjaan_ujian
 * @property int $jlh_soal
 *
 * @property Bidangs $bidang
 * @property ExamResults[] $examResults
 * @property Questions[] $questions
 */
class Exams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ujian', 'bidang_id', 'jlh_soal'], 'required'],
            [['bidang_id', 'jlh_soal'], 'integer'],
            [['keterangan_ujian'], 'string'],
            [['tanggal_pelaksanaan_ujian', 'tanggal_selesai_ujian', 'durasi_pengerjaan_ujian'], 'safe'],
            [['nama_ujian'], 'string', 'max' => 255],
            [['bidang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bidangs::class, 'targetAttribute' => ['bidang_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_ujian' => 'Nama Ujian',
            'bidang_id' => 'Bidang ID',
            'keterangan_ujian' => 'Keterangan Ujian',
            'tanggal_pelaksanaan_ujian' => 'Tanggal Pelaksanaan Ujian',
            'tanggal_selesai_ujian' => 'Tanggal Selesai Ujian',
            'durasi_pengerjaan_ujian' => 'Durasi Pengerjaan Ujian',
            'jlh_soal' => 'Jlh Soal',
        ];
    }

    /**
     * Gets query for [[Bidang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidang()
    {
        return $this->hasOne(Bidangs::class, ['id' => 'bidang_id']);
    }

    /**
     * Gets query for [[ExamResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamResults()
    {
        return $this->hasMany(ExamResults::class, ['exam_id' => 'id']);
    }

    /**
     * Gets query for [[Questions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Questions::class, ['exam_id' => 'id']);
    }
}

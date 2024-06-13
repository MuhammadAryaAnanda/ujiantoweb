<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exams".
 *
 * @property int $id
 * @property string $nama_ujian
 * @property string|null $keterangan_ujian
 * @property string $tanggal_pelaksanaan_ujian
 * @property string $tanggal_selesai_ujian
 * @property int $durasi_pengerjaan_ujian
 * @property int $administrator_id
 *
 * @property Administrators $administrator
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
            [['nama_ujian', 'tanggal_pelaksanaan_ujian', 'tanggal_selesai_ujian', 'durasi_pengerjaan_ujian', 'administrator_id'], 'required'],
            [['keterangan_ujian'], 'string'],
            [['durasi_pengerjaan_ujian', 'administrator_id'], 'integer'],
            [['nama_ujian', 'tanggal_pelaksanaan_ujian', 'tanggal_selesai_ujian'], 'string', 'max' => 255],
            [['administrator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Administrators::class, 'targetAttribute' => ['administrator_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_ujian' => 'Jenis Soal',
            'keterangan_ujian' => 'Keterangan Ujian',
            'tanggal_pelaksanaan_ujian' => 'Tanggal Pelaksanaan Ujian',
            'tanggal_selesai_ujian' => 'Tanggal Selesai Ujian',
            'durasi_pengerjaan_ujian' => 'Durasi Pengerjaan (menit)',
            'administrator_id' => 'Admin',
        ];
    }

    /**
     * Gets query for [[Administrator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrator()
    {
        return $this->hasOne(Administrators::class, ['id' => 'administrator_id']);
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

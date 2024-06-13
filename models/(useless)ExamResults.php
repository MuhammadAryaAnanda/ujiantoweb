<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_results".
 *
 * @property int $id
 * @property int $exam_id
 * @property int $student_id
 * @property int $skor
 * @property string $tanggal_pengerjaan
 * @property string $waktu_selesai
 *
 * @property Exams $exam
 * @property Students $student
 */
class ExamResults extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam_results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exam_id', 'student_id', 'skor', 'tanggal_pengerjaan', 'waktu_selesai'], 'required'],
            [['exam_id', 'student_id', 'skor'], 'integer'],
            [['tanggal_pengerjaan', 'waktu_selesai'], 'string', 'max' => 255],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exams::class, 'targetAttribute' => ['exam_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::class, 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exam_id' => 'Jenis Soal',
            'student_id' => 'Peserta',
            'skor' => 'Skor',
            'tanggal_pengerjaan' => 'Tanggal Pengerjaan',
            'waktu_selesai' => 'Waktu Selesai (menit)',
        ];
    }

    /**
     * Gets query for [[Exam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExam()
    {
        return $this->hasOne(Exams::class, ['id' => 'exam_id']);
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::class, ['id' => 'student_id']);
    }
}

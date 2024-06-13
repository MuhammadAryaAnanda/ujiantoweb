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
 * @property string|null $waktu_selesai
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
            [['exam_id', 'student_id', 'skor'], 'required'],
            [['exam_id', 'student_id', 'skor'], 'integer'],
            [['waktu_selesai'], 'safe'],
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
            'exam_id' => 'Exam ID',
            'student_id' => 'Student ID',
            'skor' => 'Skor',
            'waktu_selesai' => 'Waktu Selesai',
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

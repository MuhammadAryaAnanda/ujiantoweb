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
 * @property int $jlh_benar_essay
 * @property int $jlh_benar_pilgan
 * @property string $tgl_mulai
 * @property int $skor_essay
 * @property int $skor_pilgan
 *
 * @property Exams $exam
 * @property User $student
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
            [['exam_id', 'student_id', 'skor', 'jlh_benar_essay', 'jlh_benar_pilgan', 'skor_essay', 'skor_pilgan'], 'required'],
            [['exam_id', 'student_id', 'skor', 'jlh_benar_essay', 'jlh_benar_pilgan', 'skor_essay', 'skor_pilgan'], 'integer'],
            [['waktu_selesai', 'tgl_mulai'], 'safe'],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exams::class, 'targetAttribute' => ['exam_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['student_id' => 'id']],
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
            'jlh_benar_essay' => 'Jlh Benar Essay',
            'jlh_benar_pilgan' => 'Jlh Benar Pilgan',
            'tgl_mulai' => 'Tgl Mulai',
            'skor_essay' => 'Skor Essay',
            'skor_pilgan' => 'Skor Pilgan',
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
        return $this->hasOne(User::class, ['id' => 'student_id']);
    }
}

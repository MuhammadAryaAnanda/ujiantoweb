<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property string $pertanyaan
 * @property int $mentor_id
 * @property string $tipe_pertanyaan
 * @property int $exam_id
 *
 * @property Answers[] $answers
 * @property EssayAnswers[] $essayAnswers
 * @property Exams $exam
 * @property Mentors $mentor
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan', 'mentor_id', 'tipe_pertanyaan', 'exam_id'], 'required'],
            [['pertanyaan', 'tipe_pertanyaan'], 'string'],
            [['mentor_id', 'exam_id'], 'integer'],
            [['mentor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mentors::class, 'targetAttribute' => ['mentor_id' => 'id']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exams::class, 'targetAttribute' => ['exam_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            'mentor_id' => 'Pembuat Soal',
            'tipe_pertanyaan' => 'Tipe Pertanyaan',
            'exam_id' => 'Jenis Soal',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::class, ['question_id' => 'id']);
    }

    /**
     * Gets query for [[EssayAnswers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEssayAnswers()
    {
        return $this->hasMany(EssayAnswers::class, ['question_id' => 'id']);
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
     * Gets query for [[Mentor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMentor()
    {
        return $this->hasOne(Mentors::class, ['id' => 'mentor_id']);
    }
}

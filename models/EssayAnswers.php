<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "essay_answers".
 *
 * @property int $id
 * @property int $student_id
 * @property int $question_id
 * @property string $jawaban
 * @property int|null $nilai
 * @property string|null $komentar
 *
 * @property Questions $question
 * @property Students $student
 */
class EssayAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'essay_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'question_id', 'jawaban'], 'required'],
            [['student_id', 'question_id', 'nilai'], 'integer'],
            [['jawaban', 'komentar'], 'string'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::class, 'targetAttribute' => ['student_id' => 'id']],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::class, 'targetAttribute' => ['question_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Dijawab Oleh',
            'question_id' => 'Soal',
            'jawaban' => 'Jawaban',
            'nilai' => 'Nilai',
            'komentar' => 'Komentar',
        ];
    }

    /**
     * Gets query for [[Question]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Questions::class, ['id' => 'question_id']);
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

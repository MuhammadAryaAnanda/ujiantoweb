<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quiz_results".
 *
 * @property int $id
 * @property int $student_id
 * @property int|null $question_id
 * @property string|null $answers
 * @property string $created_at
 *
 * @property Questions $question
 * @property Students $student
 */
class QuizResults extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quiz_results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id'], 'required'],
            [['student_id', 'question_id'], 'integer'],
            [['answers'], 'string'],
            [['created_at'], 'safe'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::class, 'targetAttribute' => ['question_id' => 'id']],
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
            'student_id' => 'Student ID',
            'question_id' => 'Question ID',
            'answers' => 'Answers',
            'created_at' => 'Created At',
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

    // public function getBidang()
    // {
    //     return $this->hasOne(Students::class, ['id' => 'bidang_id']);
    // }
}

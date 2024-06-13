<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quiz_results".
 *
 * @property int $id
 * @property int $student_id
 * @property int $answers_id
 * @property string $created_at
 *
 * @property Answers $answers
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
            [['student_id', 'answers_id'], 'required'],
            [['student_id', 'answers_id'], 'integer'],
            [['created_at'], 'safe'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::class, 'targetAttribute' => ['student_id' => 'id']],
            [['answers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Answers::class, 'targetAttribute' => ['answers_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Peserta',
            'answers_id' => 'Jawaban',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasOne(Answers::class, ['id' => 'answers_id']);
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

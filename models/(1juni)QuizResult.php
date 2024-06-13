<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class QuizResult extends ActiveRecord
{
    public static function tableName()
    {
        return 'quiz_results';
    }

    public function rules()
    {
        return [
            [['student_id', 'exam_id'], 'required'],
            [['student_id', 'exam_id'], 'integer'],
            [['answers'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'exam_id' => 'Exam ID',
            'answers' => 'Answers',
        ];
    }
}
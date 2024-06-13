<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property string $jawaban
 * @property int $benar
 * @property int $student_id
 * @property int $question_id
 *
 * @property Questions $question
 * @property Students $student
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jawaban', 'benar', 'student_id', 'question_id'], 'required'],
            [['jawaban', 'nilai'], 'string'],
            [['benar', 'student_id', 'question_id'], 'integer'],
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
            'jawaban' => 'Jawaban',
            'benar' => 'Benar',
            'student_id' => 'Dijawab Oleh',
            'question_id' => 'Soal',
            'nilai' => 'Keterangan'
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

    public function attributes()
    {
        return array_merge(parent::attributes(), ['nilai']);
    }


    /**
     * @inheritdoc
     */
    public function afterFind()
    {
        parent::afterFind();

        // Define the logic for nilai attribute based on benar value
        if ($this->benar == 1) {
            $this->nilai = 'Benar';
        } else {
            $this->nilai = 'Salah';
        }
    }
}

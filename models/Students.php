<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $nim
 * @property string $asal_universitas
 * @property string $date_of_birth
 * @property string|null $address
 * @property int|null $entry_year
 * @property string $email
 * @property string $password
 * @property string|null $fakultas
 * @property resource|null $photo
 * @property int $exam_id
 * @property int|null $jurusan_id
 * @property string $jenis_kelamin
 *
 * @property EssayAnswers[] $essayAnswers
 * @property ExamResults[] $examResults
 * @property Jurusans $jurusan
 * @property QuizResults[] $quizResults
 */
class Students extends \yii\db\ActiveRecord
{
     //tambahan variabel baru untuk menyimpan file photo
     public $photoFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nim', 'asal_universitas', 'date_of_birth', 'email', 'password', 'exam_id', 'jenis_kelamin'], 'required'],
            [['date_of_birth'], 'safe'],
            [['address', 'photo', 'jenis_kelamin'], 'string'],
            [['entry_year', 'exam_id', 'jurusan_id'], 'integer'],
            [['name', 'nim', 'asal_universitas', 'email', 'password', 'fakultas'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['jurusan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusans::class, 'targetAttribute' => ['jurusan_id' => 'id']],
            //tambahan rule upload file
            [['photoFile'], 'file',
                'extensions' => 'jpg,jpeg,png',
                'maxSize'=>'256000', //max 250 kb
                'skipOnEmpty'=>true, //boleh kosong
            ],
        ];
    }

    // method untuk upload file
    // public function upload()
    // {
    //     if ($this->validate()) {
    //         $path = 'uploads/' . $this->photoFile->baseName . '.' . $this->photoFile->extension;
    //         if ($this->photoFile->saveAs($path)) {
    //             $this->photo = $path; // Save the file path in the 'photo' attribute
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nim' => 'Nim',
            'asal_universitas' => 'Asal Universitas',
            'date_of_birth' => 'Date Of Birth',
            'address' => 'Address',
            'entry_year' => 'Entry Year',
            'email' => 'Email',
            'password' => 'Password',
            'fakultas' => 'Fakultas',
            'photo' => 'Photo',
            'photoFile' => 'Foto Profil',
            'exam_id' => 'Exam ID',
            'jurusan_id' => 'Program Studi',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * Gets query for [[EssayAnswers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEssayAnswers()
    {
        return $this->hasMany(EssayAnswers::class, ['student_id' => 'id']);
    }

    /**
     * Gets query for [[ExamResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamResults()
    {
        return $this->hasMany(ExamResults::class, ['student_id' => 'id']);
    }

    /**
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusans::class, ['id' => 'jurusan_id']);
    }

    /**
     * Gets query for [[QuizResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuizResults()
    {
        return $this->hasMany(QuizResults::class, ['student_id' => 'id']);
    }
}

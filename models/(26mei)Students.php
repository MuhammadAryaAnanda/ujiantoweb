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
 * @property string $penempatan_bidang
 * @property string $date_of_birth
 * @property string|null $address
 * @property int|null $entry_year
 * @property string $email
 * @property string $password
 * @property string|null $fakultas
 * @property string|null $jurusan
 * @property resource|null $photo
 *
 * @property Answers[] $answers
 * @property EssayAnswers[] $essayAnswers
 * @property ExamResults[] $examResults
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
            [['name', 'nim', 'asal_universitas', 'penempatan_bidang', 'date_of_birth', 'email', 'password'], 'required'],
            [['date_of_birth'], 'safe'],
            [['address', 'photo'], 'string'],
            [['entry_year'], 'integer'],
            [['name', 'nim', 'asal_universitas', 'penempatan_bidang', 'email', 'password', 'fakultas', 'jurusan'], 'string', 'max' => 255],
            [['email'], 'unique'],
            //tambahan rule upload file
            [['photoFile'], 'file',
                'extensions' => 'jpg,jpeg,png',
                'maxSize'=>'256000', //max 250 kb
                'skipOnEmpty'=>true, //boleh kosong
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama',
            'nim' => 'NIM',
            'asal_universitas' => 'Asal Universitas',
            'penempatan_bidang' => 'Penempatan Bidang',
            'date_of_birth' => 'Tanggal Lahir',
            'address' => 'Alamat',
            'entry_year' => 'Tahun Masuk',
            'email' => 'Email',
            'password' => 'Password',
            'fakultas' => 'Fakultas',
            'jurusan' => 'Program Studi',
            'photo' => 'Photo',
            'photoFile' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::class, ['student_id' => 'id']);
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
}

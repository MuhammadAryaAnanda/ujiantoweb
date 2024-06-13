<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mentors".
 *
 * @property int $id
 * @property string $name
 * @property string $nip
 * @property int $bidang_id
 * @property string $date_of_birth
 * @property string $email
 * @property string $password
 * @property string|null $address
 * @property resource|null $photo
 *
 * @property Bidangs $bidang
 * @property Questions[] $questions
 */
class Mentors extends \yii\db\ActiveRecord
{
     //tambahan variabel baru untuk menyimpan file photo
     public $photoFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mentors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nip', 'bidang_id', 'date_of_birth', 'email', 'password'], 'required'],
            [['bidang_id'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['address', 'photo'], 'string'],
            [['name', 'nip', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['bidang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bidangs::class, 'targetAttribute' => ['bidang_id' => 'id']],
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
            'name' => 'Name',
            'nip' => 'Nip',
            'bidang_id' => 'Bidang ID',
            'date_of_birth' => 'Date Of Birth',
            'email' => 'Email',
            'password' => 'Password',
            'address' => 'Address',
            'photo' => 'Photo',
            'photoFile' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Bidang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidang()
    {
        return $this->hasOne(Bidangs::class, ['id' => 'bidang_id']);
    }

    /**
     * Gets query for [[Questions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Questions::class, ['mentor_id' => 'id']);
    }
}

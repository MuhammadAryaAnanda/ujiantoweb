<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrators".
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string $email
 * @property string $password
 * @property string $role
 *
 * @property Exams[] $exams
 */
class Administrators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'role'], 'required'],
            [['address', 'role'], 'string'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Admin',
            'address' => 'Alamat',
            'email' => 'Email',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exams::class, ['administrator_id' => 'id']);
    }
}

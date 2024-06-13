<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bidangs".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Mentors[] $mentors
 */
class Bidangs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bidangs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
            [['nama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Mentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMentors()
    {
        return $this->hasMany(Mentors::className(), ['id' => 'bidang_id']);
    }
}

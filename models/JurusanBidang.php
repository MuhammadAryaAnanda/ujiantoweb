<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan_bidang".
 *
 * @property int $id
 * @property int $bidang_id
 * @property int $jurusan_id
 *
 * @property Bidangs $bidang
 * @property Jurusans $jurusan
 */
class JurusanBidang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan_bidang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bidang_id', 'jurusan_id'], 'required'],
            [['bidang_id', 'jurusan_id'], 'integer'],
            [['bidang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bidangs::class, 'targetAttribute' => ['bidang_id' => 'id']],
            [['jurusan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusans::class, 'targetAttribute' => ['jurusan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bidang_id' => 'Bidang ID',
            'jurusan_id' => 'Jurusan ID',
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
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusans::class, ['id' => 'jurusan_id']);
    }
}

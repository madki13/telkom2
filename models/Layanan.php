<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "layanan".
 *
 * @property int $id
 * @property string $nama
 * @property int $harga
 * @property int $kecepatan
 * @property string $photo
 */
class Layanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'layanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'kecepatan', 'photo'], 'required'],
            [['nama'], 'string'],
            [['harga', 'kecepatan'], 'integer'],
            [['photo'], 'string', 'max' => 500],
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
            'harga' => 'Harga',
            'kecepatan' => 'Kecepatan',
            'photo' => 'Photo',
        ];
    }
}

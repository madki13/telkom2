<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimoni".
 *
 * @property int $id
 * @property string $nama
 * @property string $testimoni
 * @property string $photo
 */
class Testimoni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimoni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'testimoni', 'photo'], 'required'],
            [['nama'], 'string'],
            [['testimoni'], 'string', 'max' => 255],
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
            'testimoni' => 'Testimoni',
            'photo' => 'Photo',
        ];
    }
}

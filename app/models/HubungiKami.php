<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hubungi_kami".
 *
 * @property int $id
 * @property string $nama
 * @property string $no_telepon
 */
class HubungiKami extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hubungi_kami';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_telepon'], 'required'],
            [['nama', 'no_telepon'], 'string', 'max' => 255],
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
            'no_telepon' => 'No Telepon',
        ];
    }
}

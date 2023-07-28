<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "layanan".
 *
 * @property int $id
 * @property string $nama
 * @property int $harga
 * @property int $kecepatan
 * @property string $photo
 */
class Layanan extends \app\components\ActiveRecord
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
            [['tanggal_terbit', 'tanggal_diperbarui'], 'safe'],
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
            'tanggal_terbit' => 'Tanggal Terbit',
            'tanggal_diperbarui' => 'Tanggal diperbarui',
        ];
    }

    public function upload()
    {
        $photo = UploadedFile::getInstance($this, 'photo');
        $tmpPhoto = 'uploads/layanan/' . $photo->baseName . '.' . $photo->extension;
        if ($photo->saveAs($tmpPhoto)) {
            $this->photo = $tmpPhoto;
            return true;
        } else {
            return false;
        }
    }
}

<?php

namespace app\models;
use yii\web\UploadedFile;


use Yii;

/**
 * This is the model class for table "testimoni".
 *
 * @property int $id
 * @property string $nama
 * @property string $testimoni
 * @property string $photo
 */
class Testimoni extends \app\components\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimoni';
    }

    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'testimoni', 'photo'], 'required'],
            [['tanggal_terbit', 'tanggal_diperbarui'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['testimoni'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 500],
            [['tanggal_terbit', 'tanggal_diperbarui'], 'dateformat'],
            ['verifyCode', 'captcha'],
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
            'tanggal_terbit' => 'Tanggal Terbit',
            'tanggal_diperbarui' => 'Tanggal diperbarui',
            'verifyCode' => 'Kode verifikasi',
        ];
    }

    public function upload()
    {
        $photo = UploadedFile::getInstance($this, 'photo');
        $tmpPhoto = 'uploads/testimoni/' . $photo->baseName . '.' . $photo->extension;
        if ($photo->saveAs($tmpPhoto)) {
            $this->photo = $tmpPhoto;
            return true;
        } else {
            return false;
        }
    }
}

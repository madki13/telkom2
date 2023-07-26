<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $judul
 * @property string $konten
 * @property string $penulis
 * @property string $tanggal_terbit
 * @property string $photo
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'konten', 'penulis', 'tanggal_terbit', 'photo'], 'required'],
            [['konten'], 'string'],
            [['tanggal_terbit', 'tanggal_diperbarui'], 'safe'],
            [['judul'], 'string', 'max' => 255],
            [['penulis'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 500],
            [['tanggal_terbit', 'tanggal_diperbarui'], 'dateformat'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'konten' => 'Konten',
            'penulis' => 'Penulis',
            'tanggal_terbit' => 'Tanggal Terbit',
            'tanggal_diperbarui' => 'Tanggal diperbarui',
            'photo' => 'Photo',
        ];
    }


    public function upload()
    {
        $photo = UploadedFile::getInstance($this, 'photo');
        $tmpPhoto = 'uploads/berita/' . $photo->baseName . '.' . $photo->extension;
        if ($photo->saveAs($tmpPhoto)) {
            $this->photo = $tmpPhoto;
            return true;
        } else {
            return false;
        }
    }
}

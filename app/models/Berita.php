<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $judul
 * @property string $konten
 * @property string $penulis
 * @property string $tanggal_terbit
 * @property string $tanggal_diperbarui
 * @property string $photo
 * @property string|null $tanggal_terbit
 * @property string|null $tanggal_diperbarui
 * @property int $views
 * @property string $summary

 */
class Berita extends \app\components\ActiveRecord
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
            [['judul', 'konten', 'penulis', 'tanggal_terbit', 'photo', 'summary'], 'required'],
            [['konten'], 'string'],
            [['created_by', 'updated_by', 'views'], 'integer'],
            [['tanggal_terbit', 'tanggal_diperbarui','views'], 'safe'],
            [['judul'], 'string', 'max' => 255],
            [['penulis'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 500],
            [['summary'], 'string', 'max' => 500],

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
            'photo' => 'foto',
            'views' => 'Views',
            'summary' => 'Summary',

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

    public static function updateView($id){
        $session = Yii::$app->session;
        
        if(empty($_SESSION['views'])){
            $_SESSION['views'] = array();
        }
        if(!isset($_SESSION['views'][$id])){
            $model = self::findOne($id);
            $model->views = $model->views + 1;
            $model->save();
            $_SESSION['views'][$id] = 'visited';
        }
        $session->close(); 
    }
}

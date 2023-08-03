<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;



/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = $model->penulis;

\yii\web\YiiAsset::register($this);
?>
<div class="berita-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'konten:ntext',
            'penulis',
            'tanggal_terbit',
            'tanggal_diperbarui',
            'photo',
        ],
    ]) ?>

</div>

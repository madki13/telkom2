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
<div id="berita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="berita-view">
                    <div class="blog-text">
                        <h3><?= $model->judul ?></h3>
                        <span class="posted_on"><?= $model->tanggal_terbit ?></span>
                        <span class="comment"><a href="#"><?= $model->views ?> Dilihat<i class="icon-speech-bubble"></i></a></span>
                        <div class="content">
                            <?= $model->content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
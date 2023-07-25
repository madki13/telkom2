<?php

use app\models\Layanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LayananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Layanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Layanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama:ntext',
            'harga',
            'kecepatan',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Layanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

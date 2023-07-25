<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Testimoni $model */

$this->title = 'Update Testimoni: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Testimonis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testimoni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

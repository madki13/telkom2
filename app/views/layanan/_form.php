<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Layanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="layanan-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'kecepatan')->textInput() ?>

    <?= $form->field($model, 'photo')->fileInput(["multiple" => true, "accept" => "image/*"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


</div>
<?php ActiveForm::end(); ?>

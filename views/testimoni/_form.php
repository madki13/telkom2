<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Testimoni $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="testimoni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'testimoni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

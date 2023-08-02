<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;


/** @var yii\web\View $this */
/** @var app\models\Testimoni $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="testimoni-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'testimoni')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo')->fileInput(["multiple" => true, "accept" => "image/*"]) ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
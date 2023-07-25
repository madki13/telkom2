<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\HubungiKami $model */
/** @var ActiveForm $form */
?>
<div class="HubungiKami">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama') ?>
        <?= $form->field($model, 'no_telepon') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- HubungiKami -->

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Berita $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-6">
                        <?= $form->field($model, 'penulis')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-6">
                        <?= $form->field($model, 'konten')->textarea(['rows' => 6]) ?>
                    </div>

                    <div class="col-6">
                        <?= $form->field($model, 'tanggal_terbit')->widget(kartik\date\DatePicker::className(), [
                            'pluginOptions' => [
                                'format' => 'dd/mm/yyyy',
                            ]
                        ]) ?> 
                    </div>
                    
                    <div class="col-6">
                        <?= $form->field($model, 'photo')->fileInput(["multiple" => true, "accept" => "image/*"]) ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                &nbsp;
                <?= Html::resetButton('Reset', ['class' => 'btn btn-danger']) ?>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
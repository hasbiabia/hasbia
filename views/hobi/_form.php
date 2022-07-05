<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hobi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hobi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warna_kesukaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'makanan_kesukaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hobi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

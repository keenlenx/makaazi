<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\House */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'h_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_apartment_id')->textInput() ?>

    <?= $form->field($model, 'h_rent')->textInput() ?>

    <?= $form->field($model, 'h_deposit')->textInput() ?>

    <?= $form->field($model, 'h_water_deposit')->textInput() ?>

    <?= $form->field($model, 'h_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_bedrooms')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

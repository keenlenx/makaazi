<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Invoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoiceno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meterno')->textInput() ?>

    <?= $form->field($model, 'billtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'datecreated')->textInput() ?>

    <?= $form->field($model, 'datepaid')->textInput() ?>

    <?= $form->field($model, 'txncode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentmode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

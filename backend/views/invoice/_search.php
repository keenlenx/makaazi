<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\InvoiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'invoiceno') ?>

    <?= $form->field($model, 'meterno') ?>

    <?= $form->field($model, 'billtype') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'datecreated') ?>

    <?php // echo $form->field($model, 'datepaid') ?>

    <?php // echo $form->field($model, 'txncode') ?>

    <?php // echo $form->field($model, 'paymentmode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

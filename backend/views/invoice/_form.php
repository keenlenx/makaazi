<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use backend\models\Pricing;

/* @var $this yii\web\View */
/* @var $model backend\models\Invoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoiceno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meterno')->textInput() ?>

    <?= $form->field($model, 'billtype')->dropDownList(
        ArrayHelper::map(Pricing::find()->all(),'price','bill_type'),['prompt'=>'Select Bill Type']
        ) ?>

    <?= $form->field($model, 'amount')->textInput(['value'=>'500','disabled' => false]) ?>

    <?= $form->field($model, 'datecreated')->textInput() ?>

    <?= $form->field($model, 'datepaid')->textInput() ?>

    <?= $form->field($model, 'txncode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentmode')->dropDownList(['MPESA'=>'MPESA','CARD'=>'VISA/MASTERCARD'])  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

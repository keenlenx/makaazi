<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Meter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meterno')->textInput() ?>

    <?= $form->field($model, 'serialnumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Readings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="readings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meterno')->textInput() ?>

    <?= $form->field($model, 'readingdate')->textInput() ?>

    <?= $form->field($model, 'currentread')->textInput() ?>

    <?= $form->field($model, 'previousread')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReadingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="readings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'txn_code') ?>

    <?= $form->field($model, 'meterno') ?>

    <?= $form->field($model, 'readingdate') ?>

    <?= $form->field($model, 'currentread') ?>

    <?= $form->field($model, 'previousread') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

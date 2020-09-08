<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'h_number') ?>

    <?= $form->field($model, 'h_apartment_id') ?>

    <?= $form->field($model, 'h_rent') ?>

    <?= $form->field($model, 'h_deposit') ?>

    <?= $form->field($model, 'h_water_deposit') ?>

    <?php // echo $form->field($model, 'h_type') ?>

    <?php // echo $form->field($model, 'h_bedrooms') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TenantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 't_name') ?>

    <?= $form->field($model, 't_mobile') ?>

    <?= $form->field($model, 't_email') ?>

    <?= $form->field($model, 't_agreed_to_terms') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

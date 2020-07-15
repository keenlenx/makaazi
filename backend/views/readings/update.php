<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Readings */

$this->title = 'Update Readings: ' . $model->txn_code;
$this->params['breadcrumbs'][] = ['label' => 'Readings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->txn_code, 'url' => ['view', 'id' => $model->txn_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="readings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

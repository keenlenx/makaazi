<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricing */

$this->title = 'Update Pricing: ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Pricings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pricing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

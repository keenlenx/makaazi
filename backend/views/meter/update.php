<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Meter */

$this->title = 'Update Meter: ' . $model->meterno;
$this->params['breadcrumbs'][] = ['label' => 'Meters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->meterno, 'url' => ['view', 'id' => $model->meterno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

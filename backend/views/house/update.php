<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\House */

$this->title = 'Update House: ' . $model->h_number;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->h_number, 'url' => ['view', 'id' => $model->h_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="house-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

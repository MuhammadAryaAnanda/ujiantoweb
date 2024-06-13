<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bidangs $model */

$this->title = 'Edit Bidang: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bidang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="bidangs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

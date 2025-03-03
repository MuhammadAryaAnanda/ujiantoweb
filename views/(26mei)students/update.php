<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Students $model */

$this->title = 'Edit Data Peserta Ujian: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

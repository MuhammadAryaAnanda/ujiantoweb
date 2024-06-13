<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Exams $model */

$this->title = 'Tambah Deskripsi';
$this->params['breadcrumbs'][] = ['label' => 'Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exams-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

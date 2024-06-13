<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ExamResults $model */

$this->title = 'Edit Hasil Ujian: ' . $model->student->name;
?>
<style>
    .centered-title {
        text-align: center;
    }
</style>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/exams"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Hasil Ujian</li>
            </ol>
        </nav>
    </div>
</div>
<div class="exam-results-update">

    <h1 class="centered-title"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

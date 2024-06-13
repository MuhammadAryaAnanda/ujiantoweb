<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ExamResultsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="exam-results-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'exam_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'skor') ?>

    <?= $form->field($model, 'tanggal_pengerjaan') ?>

    <?php // echo $form->field($model, 'waktu_selesai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

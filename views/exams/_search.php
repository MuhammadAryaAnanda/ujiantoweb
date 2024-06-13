<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ExamsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="exams-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_ujian') ?>

    <?= $form->field($model, 'bidang_id') ?>

    <?= $form->field($model, 'keterangan_ujian') ?>

    <?= $form->field($model, 'tanggal_pelaksanaan_ujian') ?>

    <?php // echo $form->field($model, 'tanggal_selesai_ujian') ?>

    <?php // echo $form->field($model, 'durasi_pengerjaan_ujian') ?>

    <?php // echo $form->field($model, 'jlh_soal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

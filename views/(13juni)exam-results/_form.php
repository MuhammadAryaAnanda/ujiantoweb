<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model 
use app\models\Exams;
use app\models\students;
// ambil master data dgn active record (contoh: select * from jurusan )
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(),'id', 'nama_ujian');
$ar_student = ArrayHelper::map(Students::find()->asArray()->all(),'id', 'name');

/** @var yii\web\View $this */
/** @var app\models\ExamResults $model */
/** @var yii\widgets\ActiveForm $form */
?>

<style>
    .form-container {
        max-width: 1000px; /* Adjust the width as needed */
        margin: 0 auto; /* Center align the form */
        padding: 20px; /* Add some padding */
        border: 1px solid #ddd; /* Optional: Add border */
        border-radius: 8px; /* Optional: Add border radius */
        background-color: #f9f9f9; /* Optional: Add background color */
    }

    .form-group {
        margin-bottom: 20px; /* Adjust the margin as needed */
    }
</style>

<div class="col-xl-9 mx-auto">
    <div class="card">
        <div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_id')->dropDownList($ar_exam, ['prompt' => '... Pilih Ujian ...']) ?>

    <?= $form->field($model, 'student_id')->dropDownList($ar_student, ['prompt' => '... Pilih Peserta ...']) ?>

    <?= $form->field($model, 'skor')->textInput() ?>

    <?= $form->field($model, 'waktu_selesai')->textInput() ?>

    <?= $form->field($model, 'jlh_benar_essay')->textInput() ?>

    <?= $form->field($model, 'jlh_benar_pilgan')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->textInput(['type' => 'datetime-local']) ?>

    <?= $form->field($model, 'skor_essay')->textInput() ?>

    <?= $form->field($model, 'skor_pilgan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Mentors;
use app\models\Exams;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_mentor = ArrayHelper::map(Mentors::find()->asArray()->all(),'id', 'name');
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(),'id', 'nama_ujian');

/** @var yii\web\View $this */
/** @var app\models\Questions $model */
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

    <?= $form->field($model, 'pertanyaan')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'mentor_id')->textInput() ?>
    <?= $form->field($model, 'mentor_id')->dropDownList($ar_mentor, ['prompt' => '... Pilih Mentor ...']) ?>

    <?= $form->field($model, 'tipe_pertanyaan')->dropDownList([ 'pilihan_ganda' => 'Pilihan ganda', 'esai' => 'Esai', ], ['prompt' => '']) ?>

    <?php //= $form->field($model, 'exam_id')->textInput() ?>
    <?= $form->field($model, 'exam_id')->dropDownList($ar_exam, ['prompt' => '... Pilih Tipe Soal ...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Students;
use app\models\Questions;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_student = ArrayHelper::map(Students::find()->asArray()->all(),'id', 'name');
$ar_question = ArrayHelper::map(Questions::find()->asArray()->all(),'id', 'pertanyaan');

/** @var yii\web\View $this */
/** @var app\models\EssayAnswers $model */
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

    <?php //= $form->field($model, 'student_id')->textInput() ?>
    <?php //= $form->field($model, 'student_id')->dropDownList($ar_student, ['prompt' => '... Pilih Peserta ...']) ?>


    <?php //= $form->field($model, 'question_id')->textInput() ?>
    <?= $form->field($model, 'question_id')->dropDownList($ar_question, ['prompt' => '... Pilih Soal ...', 'disabled' => true]) ?>

    <?= $form->field($model, 'jawaban')->textarea(['rows' => 6, 'readonly' => true]) ?>
    <!-- <div class="note">(Jika jawaban tersebut benar = 10, kalau salah = 0)</div> -->
    <?= $form->field($model, 'nilai')->dropDownList([10 => 'Benar', 0 => 'Salah'], ['prompt' => '... Beri Nilai ...']) ?>

    <?php //= $form->field($model, 'komentar')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>

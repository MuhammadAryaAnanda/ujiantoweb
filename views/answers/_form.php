<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model question
use app\models\Questions;
// ambil master data dgn active record (contoh: select * from jurusan )
$ar_question = ArrayHelper::map(Questions::find()->asArray()->all(),'id', 'pertanyaan');

/** @var yii\web\View $this */
/** @var app\models\Answers $model */
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

    .note {
        font-size: 0.875em; /* Adjust the font size as needed */
        color: #666; /* Adjust the color as needed */
        margin-top: 5px; /* Adjust the margin as needed */
    }
</style>
<div class="col-xl-9 mx-auto">
    <div class="card">
        <div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jawaban')->textarea(['rows' => 6]) ?>
    <!-- <div class="note">(Jika jawaban tersebut benar = 1, kalau salah = 0)</div> -->
    <?= $form->field($model, 'benar')->dropDownList([1 => 'Benar', 0 => 'Salah'], ['prompt' => '... Pilih Keterangan ...']) ?>

    <?= $form->field($model, 'question_id')->dropDownList($ar_question, ['prompt' => '... Pilih Pertanyaan ...']) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>

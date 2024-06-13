<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Bidangs;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_bidang = ArrayHelper::map(Bidangs::find()->asArray()->all(),'id', 'nama');


/** @var yii\web\View $this */
/** @var app\models\Exams $model */
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

    <?= $form->field($model, 'nama_ujian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_id')->dropDownList($ar_bidang, ['prompt' => '... Pilih Bidang ...']) ?>

    <?= $form->field($model, 'keterangan_ujian')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_pelaksanaan_ujian')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tanggal_selesai_ujian')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'durasi_pengerjaan_ujian')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'jlh_soal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>

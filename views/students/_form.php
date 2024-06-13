<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model jurusan
use app\models\Jurusans;
use app\models\Exams;
// ambil master data dgn active record (contoh: select * from jurusan )
$ar_jurusan = ArrayHelper::map(Jurusans::find()->asArray()->all(), 'id', 'nama_jurusan');
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(), 'id', 'nama_ujian');

/** @var yii\web\View $this */
/** @var app\models\Students $model */
/** @var yii\widgets\ActiveForm $form */

?>

<style>
    .form-container {
        max-width: 1000px;
        /* Adjust the width as needed */
        margin: 0 auto;
        /* Center align the form */
        padding: 20px;
        /* Add some padding */
        border: 1px solid #ddd;
        /* Optional: Add border */
        border-radius: 8px;
        /* Optional: Add border radius */
        background-color: #f9f9f9;
        /* Optional: Add background color */
    }

    .form-group {
        margin-bottom: 20px;
        /* Adjust the margin as needed */
    }
</style>
<div class="col-xl-9 mx-auto">
    <div class="card">
        <div class="card-body">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

            <div class="form-group">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'asal_universitas')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'entry_year')->textInput() ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'photoFile')->fileInput() ?>
            </div>
            <!-- <div class="form-group">
    <label for="formFile" class="form-label">Foto (3x4)</label>
    <input class="form-control" type="file" id="formFile">
</div> -->
            <!--<div class="form-group">
    <?php //= $form->field($model, 'file')->fileInput() 
    ?>
</div> -->

            <div class="form-group">
                <?= $form->field($model, 'jurusan_id')->dropDownList($ar_jurusan, ['prompt' => '... Pilih Jurusan ...']) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'jenis_kelamin')->dropDownList(['L' => 'Laki - Laki', 'P' => 'Perempuan'], ['prompt' => '']) ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'exam_id')->dropDownList($ar_exam, ['prompt' => '... Pilih Exam ...']) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
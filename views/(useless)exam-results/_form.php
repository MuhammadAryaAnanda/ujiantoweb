<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Exams;
use app\models\Students;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(),'id', 'nama_ujian');
$ar_student = ArrayHelper::map(Students::find()->asArray()->all(),'id', 'name');


/** @var yii\web\View $this */
/** @var app\models\ExamResults $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="exam-results-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_id')->dropDownList($ar_exam, ['prompt' => '... Pilih Soal ...']) ?>
    <?php //= $form->field($model, 'exam_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->dropDownList($ar_student, ['prompt' => '... Pilih Peserta ...']) ?>
    <?php //= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'skor')->textInput() ?>

    <?php //= $form->field($model, 'tanggal_pengerjaan')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'tanggal_pengerjaan')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'waktu_selesai')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

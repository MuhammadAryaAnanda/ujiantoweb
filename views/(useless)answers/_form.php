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
/** @var app\models\Answers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="answers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jawaban')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'benar')->textInput() ?>

    <?php //= $form->field($model, 'student_id')->textInput() ?>
    <?= $form->field($model, 'student_id')->dropDownList($ar_student, ['prompt' => '... Pilih Peserta ...']) ?>

    <?php //= $form->field($model, 'question_id')->textInput() ?>
    <?= $form->field($model, 'question_id')->dropDownList($ar_question, ['prompt' => '... Pilih Soal ...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/** @var yii\web\View $this */
/** @var app\models\Students $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(
        ['options'=>['enctype'=>'multipart/form-data']]
    ); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal_universitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penempatan_bidang')->textInput(['maxlength' => true]) ?>

    
    <?php //= $form->field($model, 'date_of_birth')->textInput() ?>
    <?php  //$form->field($model, 'date_of_birth')->widget(DatePicker::classname(), [
    //'language' => 'id',
    //'options' => ['placeholder' => '... Pilih Tanggal ...'],
    //'pluginOptions' => [
      //  'format'=>'dd-mm-yyyy',
      //  'todayHighlight'=>true,
      //  'autoclose' => true
    //]]
    //); ?>
    <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?>

    <?php //= //$form->field($model, 'date_of_birth')->textInput(['type' => 'date', 'placeholder' => '... Pilih Tanggal ...']) ?>


    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'entry_year')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photoFile')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

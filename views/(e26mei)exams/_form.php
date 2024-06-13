<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Administrators;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_administrator = ArrayHelper::map(Administrators::find()->asArray()->all(),'id', 'name');

/** @var yii\web\View $this */
/** @var app\models\Exams $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="exams-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ujian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_ujian')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_pelaksanaan_ujian')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tanggal_selesai_ujian')->textInput(['type' => 'date']) ?>

    <?php //= $form->field($model, 'tanggal_pelaksanaan_ujian')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'tanggal_selesai_ujian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'durasi_pengerjaan_ujian')->textInput() ?>

    <?= $form->field($model, 'administrator_id')->dropDownList($ar_administrator, ['prompt' => '... Pilih Admin ...']) ?>
    <?php // $form->field($model, 'administrator_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

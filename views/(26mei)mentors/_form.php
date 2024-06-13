<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// manggil master model bidang
use app\models\Bidangs;
// ambil master data dgn active record (contoh: select * from bidang )
$ar_bidang = ArrayHelper::map(Bidangs::find()->asArray()->all(),'id', 'nama');

use kartik\select2\Select2;
/** @var yii\web\View $this */
/** @var app\models\Mentors $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mentors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'bidang_id')->textInput() ?>
    <?php /* $form->field($model, 'bidang_id')->dropDownList(
        $ar_bidang,
        ['prompt'=>'... Pilih Bidang ...']
        );*/
    ?>
    <?= $form->field($model, 'bidang_id')->dropDownList($ar_bidang, ['prompt' => '... Pilih Bidang ...']) ?>

    <?php //$form->field($model, 'bidang_id')->widget(Select2::classname(), [
        //'data' => $ar_bidang,
        //'language' => 'id',
        //'options' => ['placeholder' => '... Pilih Bidang ...'],
        //'pluginOptions' => [
            //'allowClear' => true
        //],
    //]);
    ?>
    
    <?php   //untuk membuat radiolist
            //<?= $form->field($model, 'bidang_id')->radioList($ar_bidang);
            //<?= $form->field($model, 'cover')->textInput(['maxlength' => true])
    ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'expertise')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mentors $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mentors-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
<!-- pr -->
    <div class="row mb-3"> 
        <label class="col-sm-2 col-form-label">Bidang</label>
        <div class="col-sm-10">
            <select class="form-select" name="Mentors[bidang_id]" aria-label="Default select example">
                <option selected="" disabled>Open this select menu</option>
                <?php foreach ($bidang as $item) : ?>
                <option value="<?= Html::encode($item->id) ?>"><?= Html::encode($item->nama) ?></option> 
                <?php endforeach; ?>
            </select>
        </div>
    </div>
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
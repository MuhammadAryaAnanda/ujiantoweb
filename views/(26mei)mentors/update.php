<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mentors $model */

$this->title = 'Edit Data Mentor: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mentor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mentors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Quizresults $model */

$this->title = 'Update Quizresults: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Quizresults', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quizresults-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

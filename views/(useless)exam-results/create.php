<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ExamResults $model */

$this->title = 'Create Exam Results';
$this->params['breadcrumbs'][] = ['label' => 'Exam Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-results-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

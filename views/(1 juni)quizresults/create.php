<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Quizresults $model */

$this->title = 'Create Quizresults';
$this->params['breadcrumbs'][] = ['label' => 'Quizresults', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizresults-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

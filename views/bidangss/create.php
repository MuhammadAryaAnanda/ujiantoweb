<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bidangs $model */

$this->title = 'Tambah Bidang';
$this->params['breadcrumbs'][] = ['label' => 'Bidang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidangs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

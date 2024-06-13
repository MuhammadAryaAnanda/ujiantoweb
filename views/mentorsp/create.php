<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mentors $model */

$this->title = 'Tambah Data Mentor';
$this->params['breadcrumbs'][] = ['label' => 'Data Mentor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mentors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        // pr
        'bidang' => $bidang
    ]) ?>

</div>

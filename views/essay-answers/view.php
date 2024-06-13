<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\EssayAnswers $model */

$this->title = $model->jawaban;
$this->params['breadcrumbs'][] = ['label' => 'Essay Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="essay-answers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'student_id',
            'student.name', //nama relasi model + kolom ditabel master
            // 'question_id',
            'question.pertanyaan', //nama relasi model + kolom ditabel master
            'jawaban:ntext',
            'nilai',
            'komentar:ntext',
        ],
    ]) ?>

</div>

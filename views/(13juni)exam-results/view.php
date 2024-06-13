<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ExamResults $model */

$this->title = 'View Hasil Ujian: ' . $model->student->name;
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/exam-results"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">View Hasil Ujian</li>
            </ol>
        </nav>
    </div>
</div>
<div class="exam-results-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php //= Html::a('Delete', ['delete', 'id' => $model->id], [
        //     'class' => 'btn btn-danger',
        //     'data' => [
        //         'confirm' => 'Are you sure you want to delete this item?',
        //         'method' => 'post',
        //     ],
        // ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'exam.nama_ujian',
            'student.name',
            // 'skor',
            // 'waktu_selesai',
            // 'jlh_benar_essay',
            // 'jlh_benar_pilgan',
            'tgl_mulai',
            'skor_essay',
            'skor_pilgan',
            [
                'label' => 'Total Skor',
                'value' => function($model) {
                    return $model->skor_essay + $model->skor_pilgan;
                },
            ],
        ],
    ]) ?>

</div>

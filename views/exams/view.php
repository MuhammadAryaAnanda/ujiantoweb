<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Exams $model */

$this->title = 'View Jenis Ujian: ' . $model->nama_ujian;
// $this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/exams"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> View Data Jenis Ujian</li>
            </ol>
        </nav>
    </div>
</div>
<div class="exams-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php //= Html::a('Hapus', ['delete', 'id' => $model->id], [
        //     'class' => 'btn btn-danger',
        //     'data' => [
        //         'confirm' => 'Apakah data peserta ini ingin anda hapus?',
        //         'method' => 'post',
        //     ],
        // ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nama_ujian',
            'bidang.nama',
            'keterangan_ujian:ntext',
            // 'tanggal_pelaksanaan_ujian',
            // 'tanggal_selesai_ujian',
            'durasi_pengerjaan_ujian',
            // 'jlh_soal',
        ],
    ]) ?>

</div>

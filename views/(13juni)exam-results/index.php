<?php

use app\models\ExamResults;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ExamResultsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Hasil Ujian';
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tabel Hasil Ujian</li>
            </ol>
        </nav>
    </div>
</div>
<!-- </div> -->
<h6 class="mb-0 text-uppercase">Tabel Hasil Ujian</h6>
<hr />
<!-- <p>
    <?php //= Html::a('Tambah Hasil Akhir', ['create'], ['class' => 'btn btn-success']) ?>
</p> -->
<div class="card">
    <div class="card-body">
        <table id="example2" class="display nowrap table table-striped table-hover dataTable dtr-column"
            style="width:100%">
            <thead>
                <tr>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc"></th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">No</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Jenis Ujian</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Peserta</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Tanggal Mulai</th>
                    <!-- <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Jumlah Benar (Pilgan)</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Jumlah Benar (Essay)</th> -->
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Skor Pilgan</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Skor Essay</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Total Skor</th>
                    <!-- <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Waktu Selesai</th> -->
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Aksi</th>
                    <!-- <th>No</th>
                        <th>Jenis Ujian</th>
                        <th>Peserta</th>
                        <th>Tanggal Mulai</th>
                        <th>Jumlah Benar (Essay)</th>
                        <th>Jumlah Benar (Pilgan)</th>
                        <th>Skor Essay</th>
                        <th>Skor Pilgan</th>
                        <th>Total Skor</th>
                        <th>Waktu Selesai</th>
                        <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->models as $index => $model) : ?>
                <tr>
                    <td></td>
                    <td><?= $index + 1 ?></td>
                    <td><?= Html::encode($model->exam->nama_ujian) ?></td>
                    <td><?= Html::encode($model->user->username) ?></td>
                    <td><?= Html::encode($model->tgl_mulai) ?></td>
                    <!-- <td><?php //= Html::encode($model->jlh_benar_pilgan) ?></td>
                    <td><?php //= Html::encode($model->jlh_benar_essay) ?></td> -->
                    <td><?= Html::encode($model->skor_pilgan) ?></td>
                    <td><?= Html::encode($model->skor_essay) ?></td>
                    <td><?= Html::encode($model->skor_pilgan + $model->skor_essay) ?></td>
                    <!-- <td><?php //= Html::encode($model->waktu_selesai) ?></td> -->
                    <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                            <?= Html::a('<i class="bi bi-eye-fill text-primary"></i>', ['view', 'id' => $model->id], ['data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'bottom', 'title' => 'View']) ?>
                            <?= Html::a('<i class="bi bi-pencil-fill text-warning"></i>', ['update', 'id' => $model->id], ['data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'bottom', 'title' => 'Edit']) ?>
                            <!-- Menambahkan tombol Delete -->
                            <?= Html::beginForm(['delete', 'id' => $model->id], 'post') ?>
                            <?= Html::submitButton('<i class="bi bi-trash-fill text-danger"></i>', ['data-bs-toggle' => 'tooltip', 'data-bs-placement' => 'bottom', 'title' => 'Delete', 'class' => 'btn btn-link', 'style' => 'margin-left: -20px;', 'data' => ['confirm' => 'Apakah kamu yakin ingin menghapus data ini?', 'method' => 'post']]) ?>
                            <?= Html::endForm() ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

<!--start switcher-->
<div class="switcher-body">
    <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
            class="bi bi-paint-bucket me-0"></i></button>
    <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                    value="option1">
                <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                    value="option3">
                <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                    value="option3" checked>
                <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end switcher-->

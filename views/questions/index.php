<?php

use app\models\Questions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Mentors;
use app\models\Exams;
$ar_mentor = ArrayHelper::map(Mentors::find()->asArray()->all(), 'id', 'name');
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(), 'id', 'nama_ujian');

/** @var yii\web\View $this */
/** @var app\models\QuestionsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bank Soal';
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Bank Soal</li>
            </ol>
        </nav>
    </div>
</div>
<h6 class="mb-0 text-uppercase">Bank Soal</h6>
<hr />
<p>
    <?= Html::a('Tambah Soal', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<div class="card">
    <div class="card-body">
        <table id="example2" class="display nowrap table table-striped table-hover dataTable dtr-column"
            style="width:100%">
            <thead>
                <tr>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc"></th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">No</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Pertanyaan</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Pembuat Soal</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Tipe Pertanyaan</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Jenis Soal</th>
                    <th class="dt-orderable-asc dt-orderable-desc dt-ordering-asc">Aksi</th>
                    <!-- <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Pembuat Soal</th>
                        <th>Tipe Pertanyaan</th>
                        <th>Jenis Soal</th>
                        <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->models as $index => $model) : ?>
                <tr>
                    <td></td>
                    <td><?= $index + 1 ?></td>
                    <td><?= Html::encode($model->pertanyaan) ?></td>
                    <td><?= Html::encode($model->mentor->name) ?></td>
                    <td><?= Html::encode($model->tipe_pertanyaan) ?></td>
                    <td><?= Html::encode($model->exam->nama_ujian) ?></td>
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

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mentors $model */

$this->title = 'View Mentor: ' . $model->name;
// $this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="/mentors"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">View Data Mentor</li>
            </ol>
        </nav>
    </div>
</div>
<div class="mentors-view">

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

    <div class="row">
    <div class="col-md-7">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'nip',
            'bidang.nama',
            'date_of_birth',
            'email:email',
            'password',
            'address:ntext',
            // 'photo',
        ],
    ]) ?>
     </div>
    <div class="col-md-5">
        <center>
            <?php 
            if(!empty($model->photo)){ 
            ?>
                <img src="<?= Yii::$app->request->baseUrl . '/uploads/profiles/' . $model->photo; ?>" width="80%" />
            <?php 
            } else{ 
            ?>
                <img src="<?= Yii::$app->request->baseUrl . '/uploads/profiles/nophoto.png'; ?>" width="50%" />
            <?php } ?>
        </center>
    </div>
    </div>

</div>

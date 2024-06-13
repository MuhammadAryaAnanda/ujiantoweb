<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Students $model */

$this->title = 'Data Peserta';
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah data peserta ini ingin anda hapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row">
    <div class="col-md-7">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'nim',
            'asal_universitas',
            'penempatan_bidang',
            'date_of_birth',
            'address:ntext',
            'entry_year',
            'email:email',
            'password',
            'fakultas',
            'jurusan',
            //'photo',
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
    <!-- <div class="col-md-5">
        <center>
            <
            if(!empty($model->photo)){
            ?>
                <img src="</? Yii::$app->request->baseUrl;?>
                uploads/profiles/</?= $model->photo; ?>" width="50%" />
            <
            }
            else{
            ?>
                <img src="</? Yii::$app->request->baseUrl;?>
                uploads/profiles/nophoto.png" width="50%" />
            < } ?>
        </center>
    </div> -->
    </div>

</div>

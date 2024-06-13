<?php

use app\models\ExamResults;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Exams;
use app\models\Students;
$ar_exam = ArrayHelper::map(Exams::find()->asArray()->all(),'id', 'nama_ujian');
$ar_student = ArrayHelper::map(Students::find()->asArray()->all(),'id', 'name');

/** @var yii\web\View $this */
/** @var app\models\ExamResultsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hasil Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-results-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Hasil Ujian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'exam_id',
            [
                'attribute'=>'exam_id', //foreign key
                'value'=>'exam.nama_ujian',
                'filter'=>ArrayHelper::map(Exams::find()->all(),'id','nama_ujian'),
            ],
            // 'student_id',
            [
                'attribute'=>'student_id', //foreign key
                'value'=>'student.name',
                'filter'=>ArrayHelper::map(Students::find()->all(),'id','name'),
            ],
            'skor',
            'tanggal_pengerjaan',
            'waktu_selesai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ExamResults $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

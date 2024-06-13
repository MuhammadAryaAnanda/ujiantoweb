<?php

use app\models\ExamResults;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ExamResultsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Exam Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-results-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Exam Results', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'exam_id',
            'student_id',
            'skor',
            'waktu_selesai',
            //'jlh_benar_essay',
            //'jlh_benar_pilgan',
            //'tgl_mulai',
            //'skor_essay',
            //'skor_pilgan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ExamResults $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

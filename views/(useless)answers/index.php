<?php

use app\models\Answers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Students;
use app\models\Questions;
$ar_student = ArrayHelper::map(Students::find()->asArray()->all(),'id', 'name');
$ar_question = ArrayHelper::map(Questions::find()->asArray()->all(),'id', 'pertanyaan');

/** @var yii\web\View $this */
/** @var app\models\AnswersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jawaban Piligan Berganda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Jawaban', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'jawaban:ntext',
            // 'student_id',
            [
                'attribute'=>'student_id', //foreign key
                'value'=>'student.name',
                'filter'=>ArrayHelper::map(Students::find()->all(),'id','name'),
            ],
            'nilai',
            // 'question_id',
            [
                'attribute'=>'question_id', //foreign key
                'value'=>'question.pertanyaan',
                'filter'=>ArrayHelper::map(Questions::find()->all(),'id','pertanyaan'),
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Answers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]);
    ?>

</div>

<?php

namespace app\controllers;

use app\models\EssayAnswers;
use yii\data\ActiveDataProvider;
use app\models\EssayAnswersSearch;
use webvimark\modules\UserManagement\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use Yii;

/**
 * EssayAnswersController implements the CRUD actions for EssayAnswers model.
 */
class EssayAnswersController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all EssayAnswers models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EssayAnswers::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EssayAnswers model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EssayAnswers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EssayAnswers();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EssayAnswers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $exam_id = (new Query())
        ->select(['exam_id'])
        ->from('questions')
        ->where(['id', $model["question_id"]])
        ->one();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $skor_skrg = (new Query())
                ->select(['a.nilai'])
                ->from(['essay_answers' => 'a'])
                ->leftJoin(['questions' => 'q'], 'a.question_id = q.id')
                ->where(['a.student_id' => User::getCurrentUser($fromSingleton = true)['id'], 'q.exam_id' => $exam_id['exam_id'] ])
                ->sum('nilai');
            
            Yii::$app->db->createCommand()
                ->update('exam_results', ['skor_essay' => $skor_skrg], ['student_id' => User::getCurrentUser($fromSingleton = true)['id'], 'exam_id' => $exam_id['exam_id']])
                ->execute();
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EssayAnswers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EssayAnswers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return EssayAnswers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EssayAnswers::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

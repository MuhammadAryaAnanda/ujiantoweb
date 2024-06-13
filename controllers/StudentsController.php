<?php

namespace app\controllers;

use app\models\Students;
use app\models\StudentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//tambahan
use yii\web\UploadedFile;

/**
 * StudentsController implements the CRUD actions for Students model.
 */
class StudentsController extends Controller
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
     * Lists all Students models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new StudentsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Students model.
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
     * Creates a new Students model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
{
    $model = new Students();

    if ($this->request->isPost) {
        if ($model->load($this->request->post()) && $model->save()) {
            //proses awal upload file
            $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
            if($model->validate() && !empty($model->photoFile))
            {
                //simpan nama file photo dgn nama  dan extension file yang diupload
                $nama = $model->name.'.'.$model->photoFile->extension;
                //simpan nama file photo ke field photo pada model
                $model->photo = $nama;
                //simpan semua data2 ke model Students
                $model->save();
                //simpan fisik gambar ke folder images
                $model->photoFile->saveAs('uploads/profiles/'.$nama);
            }
            else{
                $model->save();
            }
            //proses akhir upload file
            return $this->redirect(['index', 'id' => $model->id]);
        }
    } else {
        $model->loadDefaultValues();
    }

    return $this->render('create', [
        'model' => $model,
    ]);
}

    /**
     * Updates an existing Students model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            //proses awal upload file
            $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
            if($model->validate() && !empty($model->photoFile))
            {
                //simpan nama file photo dgn nama  dan extension file yang diupload
                $nama = $model->name.'.'.$model->photoFile->extension;
                //simpan nama file photo ke field photo pada model
                $model->photo = $nama;
                //simpan semua data2 ke model Students
                $model->save();
                //simpan fisik gambar ke folder images
                $model->photoFile->saveAs('uploads/profiles/'.$nama);
            }
            else{
                $model->save();
            }
            //proses akhir upload file
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Students model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();
        //hapus dulu fisik photo di folder imgages
        $model = $this->findModel($id);
        unlink('uploads/profiles/'.$model->photo);
        $model->delete();//hapus semua data

        return $this->redirect(['index']);
    }

    /**
     * Finds the Students model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Students the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Students::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

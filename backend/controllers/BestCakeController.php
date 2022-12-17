<?php

namespace backend\controllers;

use backend\models\BestCake;
use backend\models\BestCakeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BestCakeController implements the CRUD actions for BestCake model.
 */
class BestCakeController extends Controller
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
     * Lists all BestCake models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BestCakeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BestCake model.
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
     * Creates a new BestCake model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BestCake();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {

                $imageFile= UploadedFile::getInstance($model, 'img_url');
                if(isset($imageFile->size)){
                $imageFile->saveAs('upload/svg'.$imageFile->baseName.'.'.$imageFile->extension);
                }
                $model->img_url = $imageFile->baseName.'.'.$imageFile->extension;
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
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
     * Updates an existing BestCake model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) ) {

            $imageFile= UploadedFile::getInstance($model, 'img_url');
            if(isset($imageFile->size)){
            $imageFile->saveAs('upload/svg'.$imageFile->baseName.'.'.$imageFile->extension);
            }
            $model->img_url = $imageFile->baseName.'.'.$imageFile->extension;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BestCake model.
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
     * Finds the BestCake model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return BestCake the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BestCake::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

<?php

namespace app\controllers\bemanage;

use app\models\CategorySearch;
use Yii;
use app\models\Category;
use yii\base\ErrorException;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
{
    public $layout = 'admin';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'  => ['GET', 'POST'],#列表GET，可编辑列POST
                    'view'   => ['GET'],#查看
                    'create' => ['GET', 'POST'],#创建
                    'update' => ['GET', 'PUT', 'POST'],#修改
                    'delete' => ['POST', 'DELETE'],#单一删除
                    'change-status' => ['POST'],#批量修改状态
                    'image-delete' => ['POST'],#多图片的删除
                    'delete-all' => ['POST'],#批量删除
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //可编辑列操作   保存数据   开始
        if (Yii::$app->request->post('hasEditable')) {
            $controller = ucfirst(replaceBackend(Yii::$app->controller->id));
            $id = Yii::$app->request->post('editableKey');
            $model = Category::findOne(['id' => $id]);
            $posted = current($_POST[$controller]);
            $post = [$controller => $posted];
            $output = '';
            if ($model->load($post)) {
                try{
                    if($model->save()){
                        isset($posted['name']) && $output = $model->name;
                        isset($posted['model']) && $output = $model->model;
                        isset($posted['sort']) && $output = $model->sort;
                        isset($posted['status']) && $output = dropDown('flag',$model->status);
                    }
                }catch (\Exception $e){
                    return $e->getMessage();
                }
            }
            return \yii\helpers\Json::encode(['output'=>$output,'message'=>'']);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     * @throws ErrorException
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post())) {

            if($model->save()){
                if(isset($image) && isset($path)) {
                    $image->saveAs($path);
                }
                return $this->redirect(['index']);
            } else {
                throw new ErrorException('The create does not save. ');
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param $id
     * @return string|\yii\web\Response
     * @throws ErrorException
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                if(isset($image) && isset($path)) {
                    $image->saveAs($path);
                }
                return $this->redirect(['index']);
            } else {
                throw new ErrorException('The modify does not save. ');
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    /**
     * 批量删除
     */
    public function actionDeleteAll()
    {
        $ids = getVal(app('request')->post(), 'ids');
        if(empty($ids)) echoJson(60001,\Yii::t('common','None select any info'));

        $rs = Category::deleteAll(['id'=>$ids]);
        if(empty($rs)) echoJson(60002,\Yii::t('common','Batch deleting failure'));

        echoJson(200,\Yii::t('common','Batch deletions'));
    }

    /**
     * 批量修改状态
     */
    public function actionChangeStatus()
    {
        $this->enableCsrfValidation = false;
        $post = app('request')->post();
        $ids = getVal($post, 'ids');
        $status = getVal($post, 'status');
        if(empty($ids)) echoJson(60001,\Yii::t('common','None select any info'));

        $rs = Category::updateAll(['status' => $status],['in','id',$ids]);
        if(empty($rs)) echoJson(60002,\Yii::t('common','Batch modification state is failure'));

        echoJson(200,\Yii::t('common','Batch modification state is successful'));
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

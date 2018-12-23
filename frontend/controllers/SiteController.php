<?php
namespace frontend\controllers;

use yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class SiteController extends Controller
{
	public $enableCsrfValidation = false;

	public $layout = "@frontend/views/layouts/main.php";

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = new yii\db\Query();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,                  // 如何来取得数据
            'pagination' => ['pageSize'=>5],    // pagination 用于分页
            'sort'  => [                        // sort 用于排序
                'defaultOrder' => [
                    'id' => SORT_DESC,          // defaultOrder 指定默认排序字段
                ],
                'attributes' => ['id','title'], // attribute 指定那几个字段可以用来排序
            ],
        ]);

        $this->getView()->title = Yii::$app->params['generalSetting']['title']['index'];

        return $this->render("index", [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTest(){
	echo Yii::getVersion();
    }
}

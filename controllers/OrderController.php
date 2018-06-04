<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Order;
use yii\data\Pagination;
use yii\data\Sort;

class OrderController extends Controller
{

	public function actionIndex()
	{
		$orderById = null;
		if(\Yii::$app->request->get('order-by-id')=='asc') {
			$orderById = 'asc';
		} elseif (\Yii::$app->request->get('order-by-id')=='desc') {
			$orderById = 'desc';
		}

        $orderBy = '';
		if($orderById) $orderBy = 'id ' . $orderById;
        

		$query = Order::find()->with('products')->orderBy($orderBy);

		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
		$orders = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();
		
		return $this->render('index', ['orders' => $orders, 'pages' => $pages]);
	}


	public function actionIndexBkp()
	{
		$query = Order::find()->with('products');

		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
		$orders = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();

		return $this->render('index', ['orders' => $orders, 'pages' => $pages]);
	}

	public function actionAdd($product_id)
	{
		$model = new Order();
		$model->product_id = $product_id;
		$model->save();

		return $this->redirect(['product/index']);
	}

}
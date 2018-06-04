<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Product;
use yii\data\Pagination;


class ProductController extends Controller
{

	public function actionIndex()
	{

		$query = Product::find();

		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
		$products = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();

		return $this->render('index', ['products' => $products, 'pages' => $pages]);
	}

	public function actionAdd()
	{
		$model = new Product();

		if($model->load(\Yii::$app->request->post())) {
			if($model->save ()) {
				 \Yii::$app->session->setFlash('success', 'Данные приняты');
				 return $this->refresh();
			} else {
				\Yii::$app->session->setFlash('error', 'Ошибка');
			}
		}

		return $this->render('add', ['model' => $model]);
	}

	public function actionEdit($id)
	{
		$product = Product::findOne($id);

		if($product->load(\Yii::$app->request->post())) {
			if($product->save ()) {
				 \Yii::$app->session->setFlash('success', 'Данные приняты');
				 return $this->refresh();
			} else {
				\Yii::$app->session->setFlash('error', 'Ошибка');
			}
		}
		return $this->render('edit', ['product' => $product]);
	}

	public function actionDelete($id)
	{
		$product = Product::findOne($id);
		$product->delete();

		$query = Product::find();
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
		$products = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();

		return $this->render('index', ['products' => $products, 'pages' => $pages]);
	}	

}
<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Guestbook;
use yii\data\Pagination;


class PostController extends Controller
{

	public function actionIndex()
	{
		$model = new Guestbook();

		if($model->load(\Yii::$app->request->post())) {
			if($model->save ()) {
				 \Yii::$app->session->setFlash('success', 'Данные приняты');
				 return $this->refresh();
			} else {
				\Yii::$app->session->setFlash('error', 'Ошибка');
			}
		}

		$query = Guestbook::find();
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
		$posts = $query->offset($pages->offset)
		->limit($pages->limit)
		->all();

		return $this->render('index', ['posts' => $posts, 'pages' => $pages, 'model' => $model]);
	}


}
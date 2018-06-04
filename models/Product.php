<?php

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{
	
	public static function tableName(){
		return 'products';
	}

	public function attributeLabels(){
		return [
			'title' => 'Наименование',
			'cost' => 'Цена',
		];
	}

	public function rules(){
		return [
			['title', 'required'],
			['title', 'string', 'min' => 2],
			['cost', 'required'],
		];
	}	 

}
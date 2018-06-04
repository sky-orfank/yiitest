<?php

namespace app\models;
use yii\db\ActiveRecord;

class Order extends ActiveRecord{
	
	public static function tableName(){
		return 'orders';
	}

	public function attributeLabels(){
		return [
			'product_id' => 'ID товара',
		];
	}

	public function rules(){
		return [
			['product_id', 'required'],
		];
	}	 

	public function getProducts(){
		return $this->hasOne(Product::className(), ['id' => 'product_id']);
	}	

}
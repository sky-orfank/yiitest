<?php

namespace app\models;
use yii\db\ActiveRecord;

class Guestbook extends ActiveRecord{
	
	public static function tableName(){
		return 'guestbook';
	}

	public function attributeLabels(){
		return [
			'name' => 'Имя',
			'email' => 'E-mail',
			'text' => 'Текст сообщения',
		];
	}

	public function rules(){
		return [
			['name', 'required'],
			['email', 'required'],
			['email', 'email'],
			['name', 'string', 'min' => 2],
			['text', 'required'],
		];
	}	 

}
<?php

namespace app\models;


use yii\base\Model;

class UserForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return[
			// name and email are both required
            [['name', 'email'], 'required'],
            // rememberMe must be a boolean value
            ['email', 'email'],
		];
	}
}
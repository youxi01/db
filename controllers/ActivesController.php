<?php

namespace app\controllers;


use yii;
use yii\web\Controller;

use app\models\Actives;
use app\models\ext\ActivesExt;


class ActivesController extends Controller
{
	public function actionAdd($id=''){

		if($id){
			$array['id'] = $id;
		}
		$array['name'] = '222333';
		$array['account_id'] = '12';

		$result = ActivesExt::saves($array);
		echo $result;
	}

	public function actionGetlist(){
		$list = ActivesExt::getAll();
		print_r($list);
	}
}

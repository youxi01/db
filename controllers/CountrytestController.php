<?php

namespace app\controllers;


use yii;
use yii\web\Controller;

use app\models\Country;
use app\models\ext\CountryExt;

class CountrytestController extends Controller
{
	public function actionIndex(){

		echo 111;die;
	}

	public function actionSave(){
		$mod = new Country;
		$mod->code = 's2';
		$mod->name = 'ssdd';
		$mod->population = '212';
		$result = $mod->save();
		if($result){
			echo 111;die;
		}else{
			echo 22;die;
		}
 	}

 	public function actionSavext(){
 		$array  = array('code' =>  's5', 'name'=>'eee','population'=>'12321123');
 		$result = CountryExt::saves($array);
 		print_r($result);
 	}
}

<?php

namespace app\controllers;


use yii;
use yii\web\Controller;

use app\models\ext\ActivityListExt;
use lulubin\qrcode\QrCode;
class ActivityController extends Controller
{    
 		
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	
    public function actionIndex(){
        return $this->renderPartial('index');
    }

    // 获取创建活动URL QR
    public function actionGetlink(){
        ob_end_clean();
        header("Content-type:image/png");

        $type = (int)Yii::$app->request->get('type');
        $uid = 1;
        $token = ActivityListExt::getOne($uid,$type);
        $url = Yii::$app->request->hostInfo."/activitygroupon?token=".$token;
        echo QRcode::png($url);
       // echo $token;
    }


    public function actionAdd(){
        
    }

}
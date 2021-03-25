<?php

namespace app\controllers;


use yii;
use yii\web\Controller;

use app\models\ActivityGroupon;
use app\models\ext\ActivityGrouponExt;
use app\models\ext\ActivityListExt;

use lulubin\qrcode\QrCode;

class ActivitygrouponController extends Controller
{
    public $enableCsrfValidation = false;


    public function actionIndex($token)
    {
        // 验证token
        if(!$token || !ActivityListExt::_validataToken($token))
            Yii::$app->end();

        $info = ActivityGrouponExt::getInfoByToken($token);
        print_r($info);
        return $this->renderPartial('index',['info'=>$info]);
    }

    public function actionGetlist()
    {
        $list = ActivesExt::getAll();
        print_r($list);
    }

    // 保存活动
    public function actionCreate()
    {
        $post = Yii::$app->request->post();
        $post['course_activity_price'] = \yii\helpers\Json::encode($post['course_activity_price']);
        $post['activity_form_item'] = \yii\helpers\Json::encode($post['activity_form_item']);
        $result = ActivityGrouponExt::saves($post);
        print_r($result);
        die;
    }


}

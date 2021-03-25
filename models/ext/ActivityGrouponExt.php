<?php

namespace app\models\ext;

use Yii;
use app\models\ActivityGroupon;
use app\common\Util;

class ActivityGrouponExt extends ActivityGroupon
{
    public static function saves($array)
    {

        $requred_arr = array("token");

        foreach ($requred_arr as $key) {
            if (empty($array[$key])) {
                return 1006;    //缺少参数
            }
        }

        if ($array['id'] > 0) {
            $mod = ActivityGroupon::findOne($array['id']);
        } else {
            $mod = new ActivityGroupon;
        }
        $mod->attributes = $array;
        $mod->time = time();
        if ($mod->save()) {
            return 1000;
        } else {
            return 1001;
        }
    }

    /**
     * get info 
     * @param string $token
     * @return array
     */
    public static function getInfoByToken($token){
        $info = ActivityGroupon::findOne(['token'=>$token]);
        if($info){
            return $info->attributes;
        }
    }

    public static function getAll()
    {
        $sql = 'select * from train_actives';
        $array = util::Tool()->findAllSql($sql);
        return $array;
    }
}

<?php

namespace app\models\ext;

use Yii;
use app\models\Actives;
use app\common\Util;

class ActivesExt extends Actives
{
    public static function saves($array){

        $requred_arr = array("name","account_id");
        
        foreach ($requred_arr as $key) {
            if (empty($array[$key])) {
                return 1006;    //缺少参数
            }
        }
        
        if($array['id'] > 0){
            $mod = Actives::findOne($array['id']);
        }else{
            $mod = new Actives;
        }
        $mod->attributes = $array;
        $mod->time = time();
        if ($mod->save()) {
            return 1000;
        } else {
            return 1001;
        }
    }

    public static function getAll(){
        $sql = 'select * from train_actives';
        $array = util::Tool()->findAllSql($sql);
        return $array;
    }
}

<?php

namespace app\models\ext;

use Yii;
use app\models\Country;
/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property int $population
 */
class CountryExt extends Country
{
    public static function saves($array){
        
        $requred_arr = array("code","name","population");
        
        foreach ($requred_arr as $key) {
            if (empty($array[$key])) {
                return 1006;    //缺少参数
            }
        }
        
        if($array['id'] > 0){
            $mod = Country::findOne($array['id']);
        }else{
            $mod = new Country;
        }

        
        $mod->attributes = $array;
       // $mod->time = time();
        if ($mod->save()) {
            return 1000;
        } else {
            return 1001;
        }
    }
}

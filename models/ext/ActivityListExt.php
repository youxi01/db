<?php

namespace app\models\ext;

use Yii;
use app\models\ActivityList;
use app\models\ActivityGroupon;
use app\common\Util;

class ActivityListExt extends ActivityList
{

    /**
     * 保存数据
     */
    public static function saves($array)
    {

        $requred_arr = array("type");

        foreach ($requred_arr as $key) {
            if (empty($array[$key])) {
                return 1006;    //缺少参数
            }
        }

        if ($array['id'] > 0) {
            $mod = ActivityList::findOne($array['id']);
        } else {
            $mod = new ActivityList;
            $mod->token = md5(time() . rand(10000, 999999));
        }
        $mod->attributes = $array;
        $mod->time = time();
        if ($mod->save()) {
            return ['code' => 1, 'data' => $mod];
        } else {

            return 1001;
        }
    }

    /**
     * 创建活动获取操作URL
     *
     * @param string $uid
     * @param string $type 1团购 2秒杀 3砍价
     * @return static|null
     */
    public static function getOne($uid, $type)
    {
        $info = ActivityList::findOne(['uid' => $uid, 'type' => $type, 'state' => 0]);
        if ($info) {
            $groupon_info = ActivityGroupon::findOne(['activity_list_id' => $info->id]);
            if (!$groupon_info) {
                return $info->token;
            }
        }

        // 创建token
        $result = ActivityListExt::saves(['type' => $type, 'uid' => $uid]);
        if (@$result['code'] == 1) {
            return $result['data']->token;
        }
    }

    /**
     * 创建活动获取操作URL
     * @param string $token
     * @return bool
     */
    public static function _validataToken($token){
        $info = ActivityList::findOne(['token' => $token, 'state' => 0]);
        if(!$info){
            return false;
        }
        return true;
    }

   
}

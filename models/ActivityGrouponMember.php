<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train_activity_groupon_member".
 *
 * @property int $id
 * @property int|null $order_id 订单id
 * @property int|null $activity_groupon_id 活动ID
 * @property string|null $name 姓名
 * @property string|null $mobile 手机
 * @property string|null $info 报名信息
 * @property int|null $time 时间
 * @property int|null $state 0:正常 1：删除
 */
class ActivityGrouponMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'train_activity_groupon_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'activity_groupon_id', 'time', 'state'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['mobile'], 'string', 'max' => 15],
            [['info'], 'string', 'max' => 4096],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'activity_groupon_id' => 'Activity Groupon ID',
            'name' => 'Name',
            'mobile' => 'Mobile',
            'info' => 'Info',
            'time' => 'Time',
            'state' => 'State',
        ];
    }
}

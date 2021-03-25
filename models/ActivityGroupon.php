<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train_activity_groupon".
 *
 * @property int $id
 * @property int|null $activity_list_id activity_list_id
 * @property int|null $uid uid
 * @property int|null $campus_id campus_id
 * @property string|null $token 活动参数key对应管理
 * @property string|null $activity_organization_name 机构名称
 * @property string|null $activity_images 活动图片,json
 * @property string|null $activity_title 活动标题
 * @property int|null $activity_start_time 活动开始时间
 * @property int|null $activity_end_time 活动结束时间
 * @property string|null $course_name 课程名称
 * @property string|null $course_info 课程描述
 * @property string|null $course_images 课程图片,json
 * @property float|null $course_original_price 课程原价
 * @property string|null $course_activity_price 课程方案价格,json
 * @property int|null $course_payment_state 课程是否开启支付 0未开启 1开启
 * @property int|null $course_payment_type 支付模式 1：品团价，2：定金 多阶拼团方案只支持定金
 * @property float|null $course_payment_price 支付金额，定金模式下显示
 * @property int|null $course_payment_limit 支付人数上限
 * @property int|null $member_is_supported 是否支持老会员参团
 * @property string|null $activity_info 活动说明
 * @property string|null $activity_contact 联系方式
 * @property string|null $activity_qrcode_path 二维码图片
 * @property string|null $activity_organization_info 活动机构介绍
 * @property string|null $activity_bg_music_path 活动背景音乐
 * @property string|null $activity_organization_mobile 活动机构电话
 * @property int|null $activity_data_state 活动数据是否展示 0：不展示 1:展示
 * @property int|null $activity_sms_state 是否开启短信验证 0：不展示 1:展示
 * @property string|null $activity__name 活动名称
 * @property string|null $activity_form_item 报名表单项，json
 * @property int|null $activity_state 0:未发布 1：已发布
 * @property int|null $time 时间
 * @property int|null $state 0:正常 1：删除
 */
class ActivityGroupon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'train_activity_groupon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_list_id', 'uid', 'campus_id', 'activity_start_time', 'activity_end_time', 'course_payment_state', 'course_payment_type', 'course_payment_limit', 'member_is_supported', 'activity_data_state', 'activity_sms_state', 'activity_state', 'time', 'state'], 'integer'],
            [['course_original_price', 'course_payment_price'], 'number'],
            [['activity_organization_info'], 'string'],
            [['token'], 'string', 'max' => 32],
            [['activity_organization_name', 'activity_title', 'course_name', 'activity_qrcode_path', 'activity_bg_music_path', 'activity__name'], 'string', 'max' => 255],
            [['activity_images', 'course_info', 'course_images', 'course_activity_price', 'activity_info', 'activity_contact'], 'string', 'max' => 2555],
            [['activity_organization_mobile'], 'string', 'max' => 18],
            [['activity_form_item'], 'string', 'max' => 4096],
            [['token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activity_list_id' => 'Activity List ID',
            'uid' => 'Uid',
            'campus_id' => 'Campus ID',
            'token' => 'Token',
            'activity_organization_name' => 'Activity Organization Name',
            'activity_images' => 'Activity Images',
            'activity_title' => 'Activity Title',
            'activity_start_time' => 'Activity Start Time',
            'activity_end_time' => 'Activity End Time',
            'course_name' => 'Course Name',
            'course_info' => 'Course Info',
            'course_images' => 'Course Images',
            'course_original_price' => 'Course Original Price',
            'course_activity_price' => 'Course Activity Price',
            'course_payment_state' => 'Course Payment State',
            'course_payment_type' => 'Course Payment Type',
            'course_payment_price' => 'Course Payment Price',
            'course_payment_limit' => 'Course Payment Limit',
            'member_is_supported' => 'Member Is Supported',
            'activity_info' => 'Activity Info',
            'activity_contact' => 'Activity Contact',
            'activity_qrcode_path' => 'Activity Qrcode Path',
            'activity_organization_info' => 'Activity Organization Info',
            'activity_bg_music_path' => 'Activity Bg Music Path',
            'activity_organization_mobile' => 'Activity Organization Mobile',
            'activity_data_state' => 'Activity Data State',
            'activity_sms_state' => 'Activity Sms State',
            'activity__name' => 'Activity Name',
            'activity_form_item' => 'Activity Form Item',
            'activity_state' => 'Activity State',
            'time' => 'Time',
            'state' => 'State',
        ];
    }
}

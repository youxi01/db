<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train_activity_order".
 *
 * @property int $id
 * @property int|null $institution_payment_id 收款商户号列表ID
 * @property string|null $partnerid 收款商户号
 * @property int|null $receipt_type 收款方式 1：自有商户号收款 2：平台商户号收款
 * @property int|null $type 活动类型 1团购 2秒杀 3砍价
 * @property string|null $order_sn 订单号
 * @property float|null $order_price 订单金额
 * @property int|null $order_pay_type 订单支付类型 1：微信 
 * @property int|null $order_pay_state 订单支付状态 0:未支付 1:已支付
 * @property int|null $order_pay_time 订单支付时间
 * @property string|null $order_callback_result 订单回调数据
 * @property string|null $order_callback_state 订单回调状态
 * @property int|null $time 时间
 * @property int|null $state 0:正常 1：删除
 */
class ActivityOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'train_activity_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['institution_payment_id', 'receipt_type', 'type', 'order_pay_type', 'order_pay_state', 'order_pay_time', 'time', 'state'], 'integer'],
            [['order_price'], 'number'],
            [['partnerid', 'order_sn'], 'string', 'max' => 32],
            [['order_callback_result', 'order_callback_state'], 'string', 'max' => 2555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institution_payment_id' => 'Institution Payment ID',
            'partnerid' => 'Partnerid',
            'receipt_type' => 'Receipt Type',
            'type' => 'Type',
            'order_sn' => 'Order Sn',
            'order_price' => 'Order Price',
            'order_pay_type' => 'Order Pay Type',
            'order_pay_state' => 'Order Pay State',
            'order_pay_time' => 'Order Pay Time',
            'order_callback_result' => 'Order Callback Result',
            'order_callback_state' => 'Order Callback State',
            'time' => 'Time',
            'state' => 'State',
        ];
    }
}

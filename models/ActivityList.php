<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train_activity_list".
 *
 * @property int $id
 * @property int|null $type 活动类型 1团购 2秒杀 3砍价
 * @property int|null $uid uid
 * @property int|null $campus_id campus_id
 * @property string|null $token 活动参数key对应管理
 * @property int|null $time 时间
 * @property int|null $state 0:正常 1：删除 2：已发布
 */
class ActivityList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'train_activity_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'uid', 'campus_id', 'time', 'state'], 'integer'],
            [['token'], 'string', 'max' => 32],
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
            'type' => 'Type',
            'uid' => 'Uid',
            'campus_id' => 'Campus ID',
            'token' => 'Token',
            'time' => 'Time',
            'state' => 'State',
        ];
    }
}

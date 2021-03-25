<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "train_actives".
 *
 * @property int $id
 * @property string|null $name 媒体名称
 * @property string|null $account_id account_id
 * @property int|null $time 时间
 * @property int|null $state 0:正常 1：删除
 */
class Actives extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'train_actives';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time', 'state'], 'integer'],
            [['name', 'account_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'account_id' => 'Account ID',
            'time' => 'Time',
            'state' => 'State',
        ];
    }
}

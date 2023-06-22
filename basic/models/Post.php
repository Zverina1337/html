<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $organization_name
 * @property string $address
 * @property string $meeting_time
 * @property string $phone_number
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organization_name', 'address', 'meeting_time', 'phone_number'], 'required'],
            [['meeting_time'], 'safe'],
            [['organization_name', 'address', 'phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organization_name' => 'Organization Name',
            'address' => 'Address',
            'meeting_time' => 'Meeting Time',
            'phone_number' => 'Phone Number',
        ];
    }
}

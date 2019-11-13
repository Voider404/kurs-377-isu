<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $event_id
 * @property string $event_name
 * @property string $event_text
 * @property string $event_img
 * @property string $event_date
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_name', 'event_text', 'event_img', 'event_date'], 'required'],
            [['event_name', 'event_text', 'event_img'], 'string'],
            [['event_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_name' => 'Event Name',
            'event_text' => 'Event Text',
            'event_img' => 'Event Image',
            'event_date' => 'Event Date',
        ];
    }
}

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
            'event_id' => 'ID',
            'event_name' => 'Event Name',
            'event_text' => 'Event header',
            'event_img' => 'Image link',
            'event_date' => 'Event Date',
        ];
    }
    public function getEventID()
    {
        return $this->event_id;
    }
    public function getEventName()
    {
        return $this->event_name;
    }
    public function getEventText()
    {
        return $this->event_text;
    }
    public function getEventImg()
    {
        return $this->event_img;
    }
    public function getEventDate()
    {
        return $this->event_date;
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $news_id
 * @property string $news_name
 * @property string $news_text
 * @property string $news_img
 * @property string $news_category
 * @property int $news_author
 * @property string $news_date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_name', 'news_text', 'news_img', 'news_category', 'news_author', 'news_date'], 'required'],
            [['news_name', 'news_text', 'news_img', 'news_category'], 'string'],
            [['news_author'], 'integer'],
            [['news_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_name' => 'News Name',
            'news_text' => 'News Text',
            'news_img' => 'News Img',
            'news_category' => 'News Category',
            'news_author' => 'News Author',
            'news_date' => 'News Date',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use app\components\message\Language;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pkey".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property integer $sort
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $language
 */
class Pkey extends \yii\db\ActiveRecord
{
    public $categoryId;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pkey';
    }
    /**
     * 初始化
     */
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        // 触发器
        $this->on(self::EVENT_AFTER_FIND, [self::className(), 'replaceImgUrl']);//查询后替换图片路径
    }
    /**
     * 行为
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class'      => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value'      => function ($event) {
                    return time();//填充值
                },
            ],
            [
                'class'      => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['language'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'language',
                ],
                'value'      => function ($event) {
                    return Language::getLanguageNum();//填充值
                },
            ],

        ];
    }

    /**
     * 替换图片前缀
     * @param $event
     */
    public static function replaceImgUrl($event)
    {
        $sender = $event->sender;
        if(!empty($sender->imgUrl)) $sender->imgUrl = yiiParams('imgHost') . $sender->imgUrl;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'status', 'created_at', 'updated_at', 'language'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('home','ID'),
            'name' => Yii::t('home','Name'),
            'url' => Yii::t('home','Url'),
            'sort' => Yii::t('home','Sort'),
            'status' => Yii::t('home','Status'),
            'created_at' => Yii::t('home','Created At'),
            'updated_at' => Yii::t('home','Updated At'),
            'language' => Yii::t('home','Language'),
        ];
    }

    /**
     * 获取所有的站内关键字
     * @return array
     */
    public static function getKeyword()
    {
        $rs = ArrayHelper::map(self::find()->select('url,name')->where(['status' => 1, 'language' => Language::getLanguageNum()])->asArray()->all(), 'url', 'name');
        return $rs;
    }
}

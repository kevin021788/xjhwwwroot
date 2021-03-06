<?php

namespace app\models;

use Yii;
use app\components\message\Language;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "process".
 *
 * @property integer $id
 * @property string $name
 * @property string $keyword
 * @property string $description
 * @property string $slug
 * @property string $imgUrl
 * @property string $desc
 * @property string $content
 * @property integer $sort
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $language
 */
class Process extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%process}}';
    }
    /**
     * 初始化
     */
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        // 触发器
        $this->on(self::EVENT_BEFORE_INSERT, [self::className(), 'replacePKey']);//插入前去掉PKey
        $this->on(self::EVENT_BEFORE_UPDATE, [self::className(), 'replacePKey']);//修改前去掉PKey
        $this->on(self::EVENT_AFTER_FIND, [self::className(), 'addPKey']);//查询后替换PKey
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
//            [
//                'class'      => AttributeBehavior::className(),
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['language'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => 'language',
//                ],
//                'value'      => function ($event) {
//                    return Language::getLanguageNum();//填充值
//                },
//            ],

        ];
    }
    /**
     * 替换PKey
     * @param $event
     */
    public static function replacePKey($event)
    {
        $sender = $event->sender;
        if(!empty($sender->content)) $sender->content = pKeyword($sender->content,true);
    }

    /**
     * 添加PKey
     * @param $event
     */
    public static function addPKey($event)
    {
        $sender = $event->sender;
        if(!empty($sender->content)) $sender->content = pKeyword($sender->content);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'desc'], 'string'],
            [['status', 'sort', 'created_at', 'updated_at', 'language'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['imgUrl','slug','keyword','description'], 'string', 'max' => 255],
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
            'keyword' => Yii::t('home','Keyword'),
            'description' => Yii::t('home','Description'),
            'slug' => Yii::t('home','Slug'),
            'imgUrl' => Yii::t('home','Img Url'),
            'desc' => Yii::t('home','Desc'),
            'content' => Yii::t('home','Content'),
            'sort' => Yii::t('home','Sort'),
            'status' => Yii::t('home','Status'),
            'created_at' => Yii::t('home','Created At'),
            'updated_at' => Yii::t('home','Updated At'),
            'language' => Yii::t('home','Language'),
        ];
    }

    /**
     * 获取详情
     * @param $id
     * @return array|null|ActiveRecord
     */
    public static function getDetail($id)
    {
        $model = self::getModel();
        if(empty($id)){
            $rs = $model->orderBy(['sort'=>'asc','id'=>'desc'])->one();
        }else{
            $rs = $model->andWhere(['id' => $id])->one();
        }
        return $rs;
    }
    /**
     * 获取下拉分类列表
     * @return array|ActiveRecord[]
     */
    public static function getCategory()
    {
        $model = self::getModel();
        $rs = $model->select(['id','name'])->asArray()->all();
        return $rs;
    }

    private static function getModel()
    {
        return self::find()->where(['status' => 1, 'language' => Language::getLanguageNum()]);
    }
}

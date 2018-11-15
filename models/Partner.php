<?php

namespace app\models;

use Yii;
use app\components\message\Language;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\db\Exception;

/**
 * This is the model class for table "partner".
 *
 * @property integer $id
 * @property integer $cat_id
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
class Partner extends \yii\db\ActiveRecord
{
    public $categoryId;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%partner}}';
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
     * 分类关联
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'cat_id']);
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
            [['cat_id', 'status', 'sort', 'created_at', 'updated_at', 'language'], 'integer'],
            [['content','keyword','description'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['imgUrl', 'desc', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('home','ID'),
            'cat_id' => Yii::t('home','Cat ID'),
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
     * 获取列表数据
     * @return array
     */
    public static function getList()
    {

        try{
            $db = \Yii::$app->db;
            $where = '';
            $catId = Yii::$app->request->get('cat_id', '');
            if(is_numeric($catId))
            {
                $where = ' AND cat_id='.$catId;
            }
            $count = $db->createCommand('SELECT COUNT(*) as count FROM '.self::tableName().' WHERE language='.Language::getLanguageNum().$where)->queryOne();
            if($count)
            {
                $pages = new Pagination(['totalCount' => $count['count'], 'defaultPageSize' => yiiParams('partnerPageSize')]);
                $list = $db->createCommand("SELECT * FROM ".self::tableName()." WHERE language=".Language::getLanguageNum().$where." LIMIT ".$pages->offset.",".$pages->limit)->queryAll();
                $ret = ['success'=>true,'pages'=>$pages,'list'=>$list];
            }
            else
            {
                throw new \Exception(Yii::t('home','Query failure'));
            }
        }catch (\Exception $e)
        {
            $ret = ['success'=>false,'msg'=>$e->getMessage()];
        }
        return $ret;
    }

    /**
     * 返回详情数据
     * @param $id
     * @return array|null|ActiveRecord
     */
    public static function getDetail($id)
    {
        return self::find()->where(['id' => $id, 'status' => 1])->asArray()->one();
    }

    /**
     * 首页新闻
     * @param int $limit
     * @return array|ActiveRecord[]
     */
    public static function getIndexList($limit=6)
    {
        return self::find()->where(['status' => 1,'language'=>Language::getLanguageNum()])->orderBy(['sort' => 'asc', 'id' => 'desc'])->limit($limit)->asArray()->all();
    }
}

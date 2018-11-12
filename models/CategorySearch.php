<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2018-10-31
 * Time: 15:31
 */

namespace app\models;


use app\components\message\Language;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Category;

/**
 * CategorySearch represents the model behind the search form of `app\models\Category`.
 */
class CategorySearch extends Category
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parentId', 'sort', 'status', 'language'], 'integer'],
            [['idPath', 'name', 'model'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Category::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'parentId' => $this->parentId,
            'sort' => $this->sort,
            'status' => $this->status,
        ]);
        $tableName = self::tableName();

        $query->andFilterWhere(['like', 'idPath', $this->idPath])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(["{$tableName}.language" => Language::getLanguageNum()])
            ->andFilterWhere(['like', 'model', $this->model]);

        return $dataProvider;
    }
}

<?php

namespace common\models;

use common\models\Category;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * CategorySearch represents the model behind the search form about `common\models\Category`.
 */
class CategorySearch extends Category
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_parentid', 'ord', 'is_display', 'is_recommend', 'create_by', 'create_at'], 'integer'],
            [['name', 'pinyin', 'icon', 'url', 'spider_url'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
            'id'                => $this->id,
            'category_parentid' => $this->category_parentid,
            'ord'               => $this->ord,
            'is_display'        => $this->is_display,
            'is_recommend'      => $this->is_recommend,
            'create_by'         => $this->create_by,
            'create_at'         => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'pinyin', $this->pinyin])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'spider_url', $this->spider_url]);

        return $dataProvider;
    }
}

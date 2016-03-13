<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Member;
use yii\db\ActiveQuery;

/**
 * MemberSearch represents the model behind the search form about `frontend\models\Member`.
 * @property string $name
 * @property string $participationType
 * @property string $position
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $created_at
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'participationType', 'position', 'email', 'phone', 'country', 'created_at'], 'safe'],
        ];
    }

    public function getCreated()
    {
        return self::parseDateString($this->created_at);
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public static function parseDateString($dateString)
    {//dateRangePicker format to array

        if ($dateString && is_string($dateString)) {
            $dateArr = explode(' - ', $dateString);
            if (count($dateArr) == 2) {
                return ['from' => strtotime($dateArr[0]), 'to' => strtotime($dateArr[1])];
            }
        }

        return false;
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @param ActiveQuery $query
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Member::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id,]);

//        var_dump($this->created);
//        exit('asd');
        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['between', 'created_at', $this->created['from'], $this->created['to']]);
        $query->andFilterWhere(['like', 'country', $this->country]);
        $query->andFilterWhere(['like', 'participationType', $this->participationType]);

        return $dataProvider;
    }
}

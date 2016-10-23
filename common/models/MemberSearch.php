<?php

namespace common\models;

use backend\models\ConfPeriod;
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
 * @property string $totalSum
 * @property string $country
 * @property string $paid
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */

    public $overallInUah;
    public $overallInUsd;
    public $period;
    private $_confPeriod;

//    public function attributes()
//    {
//        $attr = parent::attributes();
//        $attr[] = 'period';
//
//        return $attr;
//    }


    public function rules()
    {
        return [
            [['id'], 'integer'],
            [
                [
                    'name',
                    'participationType',
                    'position',
                    'email',
                    'phone',
                    'country',
                    'organisationTitle',
                    'totalSum',
                    'paid',
                    'period'
                ],
                'safe'
            ],
        ];
    }

    public function afterValidate()
    {
        parent::afterValidate();
        if ($this->period) {
            $this->_confPeriod = ConfPeriod::findOne($this->period);
        }
    }


    public function init()
    {
        parent::init();
        $this->participationType = '';
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
     * @param ActiveQuery $query
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Member::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->andFilterWhere(['id' => $this->id,]);

        $query->andFilterWhere(['like', 'name', $this->name]);
        if(is_a($this->_confPeriod, ConfPeriod::className())){
            $query->andFilterWhere(['between', 'created_at', $this->_confPeriod->regStart, $this->_confPeriod->regEnd]);
        }
        $query->andFilterWhere(['like', 'country', $this->country]);
        $query->andFilterWhere(['like', 'participationType', $this->participationType]);
        $query->andFilterWhere(['like', 'paid', $this->paid]);

        $queryForUsd = clone $query;
        $queryForUah = clone $query;
        $this->overallInUsd = $queryForUsd->andWhere(['currency' => 'usd'])->sum('totalSum');
        $this->overallInUah = $queryForUah->andWhere(['currency' => 'uah'])->sum('totalSum');

        return $dataProvider;
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "conf_period".
 *
 * @property integer $id
 * @property string $title
 * @property integer $regStart
 * @property integer $regEnd
 */
class ConfPeriod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'conf_period';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'regStart', 'regEnd'], 'required'],
            [['regStart', 'regEnd'], 'integer'],
            ['regStart', function ($attribute, $params) {
                if ($this->regStart >= $this->regEnd) {
                    $this->addError($attribute, 'Дата окончания регистрации должна быть больше даты начала');
                }
            }],
            [['title'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'regStart' => 'Начало регистрации',
            'regEnd' => 'Конец регистрации',
        ];
    }
}

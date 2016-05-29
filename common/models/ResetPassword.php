<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.05.2016
 * Time: 14:18
 */

namespace common\models;

use Yii;
use yii\base\Model;

class ResetPassword extends Model
{

    public $password;
    public $newPassword;

    public function rules()
    {
        return [
            ['password', 'string', 'skipOnEmpty' => false, 'min' => 4],
            ['newPassword', 'string', 'skipOnEmpty' => false, 'min' => 6],
            ['password', 'comparePassword']
        ];
    }

    public function comparePassword($attribute, $params)
    {
        if (!\Yii::$app->getUser()->identity->validatePassword($this->$attribute)) {
            $this->addError($attribute, 'Wrong password!');
        }
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.09.2016
 * Time: 20:24
 */

namespace frontend\modules\api;


use yii\base\Module;

class ApiModule extends Module{
    public function __construct($id, $parent = null, $config = [])
    {
        parent::__construct($id, $parent, $config);
        \Yii::info('API Module was loaded');
    }


} 
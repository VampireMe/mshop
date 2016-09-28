<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/28/16
 * Time: 6:37 AM
 */

namespace app\models;


use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    public function init()
    {
        parent::init();
    }


}
<?php
/**
 * @version 0.0.0.1
 */

namespace app\modules\controllers;


use yii\web\Controller;

class BaseController extends Controller
{
    public function init()
    {
        parent::init();
    }

    public function userCommonLayout(){
        $this->layout = "common";
    }

}
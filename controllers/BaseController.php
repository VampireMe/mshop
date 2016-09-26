<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/27/16
 * Time: 6:01 AM
 */

namespace app\controllers;


use yii\web\Controller;

class BaseController extends Controller
{

    public function init()
    {
        parent::init();
    }

    public function userMainLayout(){
        $this->layout = "main";
    }

    public function useIndexLayout(){
        $this->layout = "index";
    }

}
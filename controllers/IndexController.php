<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/26/16
 * Time: 7:45 AM
 */

namespace app\controllers;


use yii\web\Controller;

class IndexController extends Controller
{

    public function actionIndex(){

        $params = [];
        return $this->render('index', $params);
    }

}
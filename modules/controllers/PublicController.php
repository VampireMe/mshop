<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/28/16
 * Time: 8:27 PM
 */

namespace app\modules\controllers;

use app\models\Admin;


class PublicController extends BaseController
{
    public function init()
    {
        parent::init();
        $this->layout = false;
    }

    public function actionLogin(){
        $model = new Admin();

        return $this->render('login', ['model' => $model]);
    }


}
<?php
namespace app\controllers;

class OrderController extends BaseController
{
    public $layout = false;
    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionCheck()
    {
        return $this->render("check");
    }
}

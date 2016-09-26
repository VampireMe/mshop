<?php
namespace app\controllers;


class IndexController extends BaseController
{
    public function actionIndex()
    {
        //$this->layout = false;
        //return $this->render("index");
        return $this->renderPartial("index");
    }
}

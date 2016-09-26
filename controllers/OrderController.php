<?php
namespace app\controllers;

class OrderController extends BaseController
{

    public function init()
    {
        parent::init();

        $this->userMainLayout();
    }

    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionCheck()
    {
        $this->useIndexLayout();
        return $this->render("check");
    }
}

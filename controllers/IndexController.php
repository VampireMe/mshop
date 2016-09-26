<?php
namespace app\controllers;


class IndexController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->useIndexLayout();
    }

    public function actionIndex()
    {
        return $this->render("index");
    }
}

<?php
namespace app\controllers;

class CartController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->useIndexLayout();
    }

    public function actionIndex()
    {
        //views/cart/index.php
        return $this->render("index");
    }
}

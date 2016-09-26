<?php
namespace app\controllers;

class CartController extends BaseController
{
    public function actionIndex()
    {
        //views/cart/index.php
        $this->layout = false;
        return $this->render("index");
    }
}

<?php
namespace app\controllers;


class ProductController extends BaseController
{
    public $layout = false;
    public function actionIndex()
    {
        //views/product/index.php
        //$this->layout = false;
        return $this->render("index");
    }

    public function actionDetail()
    {
        //$this->layout = false;
        return $this->render("detail");
    }
}

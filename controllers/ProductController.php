<?php
namespace app\controllers;


class ProductController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->userMainLayout();
    }

    public function actionIndex()
    {
        //views/product/index.php
        return $this->render("index");
    }

    public function actionDetail()
    {
        //$this->layout = false;
        return $this->render("detail");
    }
}

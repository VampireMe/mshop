<?php
namespace app\controllers;

class MemberController extends BaseController
{
    public function actionAuth()
    {
        $this->layout = false;
        return $this->render("auth");
    }
}

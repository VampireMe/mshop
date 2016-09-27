<?php
namespace app\controllers;

class MemberController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->userCommonLayout();
    }

    public function actionAuth()
    {
        return $this->render("auth");
    }
}

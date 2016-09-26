<?php
namespace app\controllers;

class MemberController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->userMainLayout();
    }

    public function actionAuth()
    {
        return $this->render("auth");
    }
}

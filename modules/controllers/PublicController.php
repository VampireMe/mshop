<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/28/16
 * Time: 8:27 PM
 */

namespace app\modules\controllers;

use app\models\Admin;


class PublicController extends BaseController
{
    public function init()
    {
        parent::init();
        $this->layout = false;
    }

    public function actionLogout(){
        $session = \Yii::$app->session;
        $session->remove('admin');
        if (!$session['admin']['ísLogin']){
            $this->redirect(['public/login']);
            \Yii::$app->end();
        }
        $this->goBack();
    }

    public function actionLogin(){
        $model = new Admin();
        $session = \Yii::$app->session;

        if (!empty($session['admin']["isLogin"])){
            $this->redirect(['default/index']);
            \Yii::$app->end();
        }

        if (\Yii::$app->request->isPost){
            $post = \Yii::$app->request->post();

            if ($model->login($post) || !empty($session['user']["isLogin"])){
                $this->redirect(['default/index']);
                \Yii::$app->end();
            }
        }
        return $this->render('login', ['model' => $model]);
    }


}
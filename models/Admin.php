<?php
/**
 * Created by PhpStorm.
 * User: gaoqing
 * Date: 9/28/16
 * Time: 6:36 AM
 */

namespace app\models;


class Admin extends BaseModel
{
    public $rememberMe = true;

    public static function tableName()
    {
        return '{{%admin}}';
    }

    public function rules()
    {
        return [
            ['adminuser', 'required', 'message' => '管理员账户不能为空'],
            ['adminpass', 'required', 'message' => '管理员密码不能为空'],
            ['rememberMe', 'boolean'],
            ['adminpass', 'validatePass'],
        ];
    }

    public function validatePass(){
        if (!$this->hasErrors()){
            $admin = self::find()->where('adminuser = :user and adminpass = :pass', [":user" => $this->adminuser, ":pass" => md5($this->adminpass)])->one();
            if (is_null($admin)){
                $this->addError('adminpass', '用户名或者密码错误');
            }
        }
    }

    public function login($data){
        if ($this->load($data) && $this->validate()){
            $lifetime = $this->rememberMe ? 24 * 3600 : 0;
            $session = \Yii::$app->session;

            session_set_cookie_params($lifetime);

            $session['admin'] = [
                'adminuser' => $this->adminuser,
                'isLogin' => 1,
            ];
            self::updateAll(['logintime' => time(), 'loginip' => ip2long(\Yii::$app->request->userIP)], 'adminuser = :user', ['user' => $this->adminuser]);
            return (bool)$session['admin']['isLogin'];
        }
        return false;
    }

}
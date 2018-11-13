<?php
/**
 * Created by PhpStorm.
 * User: laushow
 * Date: 2018/10/24
 * Time: 20:48
 */

namespace app\admin\controller;


use think\Request;

class Common extends Role
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->check_login();
        define("IS_POST",($_SERVER['REQUEST_METHOD']=='POST')?TRUE:FALSE);
        define("IS_GET",($_SERVER['REQUEST_METHOD']=='GET')?TRUE:FALSE);
        define('IS_METHOD', $_SERVER['REQUEST_METHOD']);
    }

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * @Description [是否登陆]
     * @Auth LAUSHOW
     * @DateTime 2018/10/26 16:54
     */
    private function check_login()
    {
        if($role_auth = session('ROLE_AUTH')){
            $role_auth = json_decode($role_auth,true);
            array_walk($role_auth,function($v,$k){
                $this->$k=$v;
            });
        }
        if (isset($this->uid) === false || isset($this->role) === false) {
            if ($this->controller !== 'user' && $this->action !== 'login') {
                $this->redirect('/user/login');
            }
        } else {
            if ($this->controller === 'user' && $this->action === 'login') {
                $this->redirect('/admin');
            }
        }
    }
}
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
    private function check_login(){
        if(empty($this->uid) || empty($this->role)){
            if($this->controller != 'user' && $this->action != 'login'){
                $this->redirect('user/login');
            }
        }
    }
}
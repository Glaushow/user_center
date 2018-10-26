<?php
/**
 * Created by PhpStorm.
 * User: Laushow
 * Date: 2018/10/26
 * Time: 16:57
 */

namespace app\admin\controller;


use think\Request;

class User extends Common
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    /**
     * @Description [登陆]
     * @Auth LAUSHOW
     * @DateTime 2018/10/26 16:57
     */
    public function login(){

        return $this->fetch();
    }

}
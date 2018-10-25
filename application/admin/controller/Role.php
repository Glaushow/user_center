<?php
/**
 * Created by PhpStorm.
 * User: Laushow
 * Date: 2018/10/25
 * Time: 15:34
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;

class Role extends Controller
{

    protected $uid = 0;
    protected $role = 0;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->check_auth();
    }

    protected function check_auth(){

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: laushow
 * Date: 2018/10/24
 * Time: 20:48
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;

class Common extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }

    public function _initialize()
    {
        parent::_initialize();
    }
}
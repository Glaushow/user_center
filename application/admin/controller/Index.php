<?php
/**
 * Created by PhpStorm.
 * User: laushow
 * Date: 2018/10/24
 * Time: 20:48
 */

namespace app\admin\controller;


class Index extends Common
{

    public function index()
    {
        return $this->fetch();
    }
}
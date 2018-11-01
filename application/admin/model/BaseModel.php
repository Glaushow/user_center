<?php
/**
 * Created by PhpStorm.
 * User: Laushow
 * Date: 2018/10/25
 * Time: 17:01
 */

namespace app\admin\model;


use think\Model;

class BaseModel extends Model
{

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: laushow
 * Date: 2018/11/1
 * Time: 20:32
 */

namespace app\admin\model;


class User extends BaseModel
{
    protected $name = 'user';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @description [验证用户]
     * @param $user_name
     * @param string $field
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @auth laushow
     * @data 2018/11/1
     */
    public function check_user($user_name, $field = '*')
    {
        return $this->field($field)
            ->where(['user_name' => $user_name])
            ->find();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Laushow
 * Date: 2018/10/25
 * Time: 17:01
 */

namespace app\admin\model;


class Role extends BaseModel
{

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @Description [获取角色配置]
     * @param $role_id
     * @Auth LAUSHOW
     * @DateTime 2018/10/25 17:13
     */
    public function get_role(){
        return $this->table('l_role')->order('role_id asc');
    }

}
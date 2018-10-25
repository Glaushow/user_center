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
    protected $controller = 0;
    protected $action = 0;

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->controller = $request->controller();
        $this->action = $request->action();
        $this->check_auth();
    }

    /**
     * @Description [检查角色]
     * @return bool
     * @Auth LAUSHOW
     * @DateTime 2018/10/25 17:11
     */
    protected function check_auth()
    {
        if (empty($this->uid) || empty($this->role)) {
            return false;
        }
        if($role_data = cache('ROLE_AUTH_DATA')){
            $role_data_array = json_decode($role_data,true);
            if(isset($role_data_array[$this->role])){

            } else {
                return false;
            }
        } else {
            if($roleData = model('role')->get_role()){
                $result = [];
                foreach($roleData as $row){
                    $result[$row['role_id']] = $row;
                }
                cache('ROLE_AUTH_DATA',json_encode($result));
                if(isset($result[$this->role])){

                } else {
                    return false;
                }
            } else {
                return true;
            }
        }
    }

}
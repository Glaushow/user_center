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
        $this->controller = strtolower($request->controller());
        $this->action = strtolower($request->action());
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
        $check_action = strtolower($this->controller.'_'.$this->action);
        if($role_data = cache('ROLE_AUTH_DATA')){
            $role_data_array = json_decode($role_data,true);
            if(isset($role_data_array[$this->role]) && $role_data_array[$this->role]['action'] == $check_action){
                return true;
            } else {
                return false;
            }
        } else {
            if($roleData = model('role')->get_role()){
                $role_data_array = [];
                foreach($roleData as $row){
                    $role_data_array[$row['role_id']] = $row;
                }
                cache('ROLE_AUTH_DATA',json_encode($role_data_array));
                if(isset($role_data_array[$this->role]) && $role_data_array[$this->role]['action'] == $check_action){
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        }
    }

}
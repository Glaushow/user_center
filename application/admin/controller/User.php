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
    public function login()
    {
        if (IS_POST == true) {
            $uname = input('u/s', '', 'trim,strip_tags,htmlspecialchars');
            $passwd = input('p/s', '', 'trim,strip_tags,htmlspecialchars');
            if (!empty($uname) && !empty($passwd)) {
                if ($userInfo = model('user')->check_user($uname,'user_id,user_name,password,salt')) {
                    if ($userInfo['password'] === md5(md5($passwd) . $userInfo['salt'])) {
                        session('ROLE_AUTH',json_encode(['uid'=>$userInfo['user_id'],'role'=>0]));
                        return_json('登陆成功', 1,null,'/admin');
                    }
                }
            }
            return_json('用户名或密码错误', -1);
        } else {
            return $this->fetch();
        }
    }

}
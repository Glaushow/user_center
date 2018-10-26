<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [

    'template' => [
        'layout_on' => true,
        'layout_name' => 'layout',
        'layout_item' => '{__CONTENT__}'
    ],

    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__CSS__' => '/static/admin/css',
        '__JS__' => '/static/admin/js',
        '__IMAGE__' => '/static/admin/js'
    ],

];

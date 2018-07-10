<?php
/**
 * @param string $message
 * @param string $redirect
 * @param string $type
 * 返回json数据
 */
function to_json($message = '错误',$redirect = '',$type = 'error'){
    exit(json_encode(array(
        'message' => $message,
        'redirect' => $redirect,
        'type' => $type
    )));
}

/**
 * @param $key
 * @param null $is_not_exist
 * @return null
 * 获取参数
 */
function argument($key,$is_not_exist = null){
    if(isset($_REQUEST[$key])){
        if(!empty($_REQUEST[$key])){
            return $_REQUEST[$key];
        }
    }
    return $is_not_exist;
}

$op = argument('op');
if(!in_array($op,array('display','logout','check'))){
    $op = 'display';
}
if(!isset($_SESSION)){
    session_start();
}
//登录验证
if($op == 'display'){
    $username = argument('username');
    $password = argument('password');
    if(empty($username) || empty($password)){
        to_json('以“域\用户名”或“用户名@域”格式输入你的用户名。','','error');
    }
    if($username == 'zmao5' && $password == 'Elaine0719'){
        // $login_info = json_encode(array(
        //     'username' => 'zmao5',
        //     'login_time' => time()
        // ));
        // file_put_contents('/login.txt',$login_info);
        to_json('登录成功','/center.html','success');
    }
    to_json('账号和密码错误','','error');
}elseif($op == 'logout'){
    file_put_contents('/login.txt','');
    header('location:/index.html');
}elseif($op == 'check'){
    $login_info = file_get_contents('/login.txt');
    if(empty($login_info)){
        to_json('请先登录','/login.html','error');
    }
    to_json('已登录','','success');
}

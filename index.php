<?php

$user=$_POST['user'];
$pass=$_POST['pass'];
if($user=='admin'){
    if($pass=='123456'){
    echo '登录成功';

    }else{
    echo '密码错误';
    }

}else{
    echo '账号不存在';
}

	

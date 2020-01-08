<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

// POST送信されていた場合
if(!empty($_POST)){

    define('MSG01','入力必須');
    define('MSG02','メール形式ではない');
    define('MSG03','パスワード不一致');
    define('MSG04','半角英数字のみ使用可能');
    define('MSG05','6文字以上のみ登録可能');
    

    $err_msg = array();

    if(empty($_POST['email'])){
        $err_msg['email'] = MSG01;
    }

    if(empty($_POST['pass'])){
        $err_msg['pass'] = MSG01;
    }

    if(empty($_POST['pass_re'])){
        $err_msg['pass_re'] = MSG01;
    }


    if(empty($err_msg)){
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $pass_re = $_POST['pass_re'];

        if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)){
            $err_msg['email'] = MSG02;
        }

        if($pass !== $pass_re){
            $err_msg['pass'] = MSG03;
        }

    }



}else{

}

?>
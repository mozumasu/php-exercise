<?php

session_start();

if(isset($_POST['username'])
  && isset($_POST['pwd'])
  && $_POST['username'] === 'test'
  && $_POST['pwd'] === 'pwd') {
    //ログイン成功
    $_SESSION['user'] = [
    'name' => $POST['username'],
    'pwd' => $_POST['pwd']
    ];
}

if(!empty($_SESSION['user'])) {
    echo 'ログイン成功';
} else {
    echo 'ログイン失敗';
}

<?php




$db_server = 'localhost';
$db_user = 'You Login Phpmyadmin User Name';
$db_pw = 'You Login Phpmyadmin Password' ;
$db_name = 'Database Name';
$mysqli = new mysqli($db_server,$db_user,$db_pw,$db_name);


if ($mysqli->connect_errno){
    echo "connect failed: " . $mysqli->connect_error . "<br/>";
    exit();
}

/**
 * Created by PhpStorm.
 * User: Andrew Chen
 * Date: 2017/7/25
 * Time: 上午 11:08
 */
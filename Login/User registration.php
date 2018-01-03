<?php session_start(); ?>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("dbConn.inc.php");
$account = $_POST['account'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$password_confirmation = $_POST['[password_confirmation'];
$phone = $_POST['phone'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性

if ($account !=null &&$password !=null&&$password_confirmation !=null
     && $password =$password_confirmation){
     $password = sha1($password);
     //新增資料進資料庫語法
    $sql = "INSERT INTO user (`account`, `name`, `password`, `email`, `tel`) 
VALUES ('$account', '$username', '$password', '$email', '$phone')";

    if ($mysqli->query($sql) ===TRUE) {
        echo'新增成功';
        echo '<meta http-equiv="REFRESH CONTENT=2;url=index.php">';
    }else{
        echo'新增失敗<br>' . $mysqli->error;
    }
}else {
    echo'輸入資料不完整';
    echo'<script>history.back();</script>';
}
?>
/**
 * Created by PhpStorm.
 * User: Andrew Chen
 * Date: 2017/7/25
 * Time: 上午 11:18
 */
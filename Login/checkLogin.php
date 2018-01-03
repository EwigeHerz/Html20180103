<?php
session_start();




include("dbConn.inc.php");
$email = $_POST['email'];
$pwd = sha1($_POST['password']);
$query = "SELECT name, email, password FROM user WHERE `email` = '$email'";
if ($result = $mysqli->query($query)) {
    $row = $result->fetch_row();
    if($row[1] ==$email &&$row[2] ==$pwd){
        $_SESSION['username'] = $email;
        echo $_SESSION['username'] . '登入成功';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=admMain.php>';
    } else {
        echo"You Don't Have Permission To Access This Site. ";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
} else {
    echo "ERROR";
    echo'<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

/**
 * Created by PhpStorm.
 * User: Andrew Chen
 * Date: 2017/7/25
 * Time: 上午 10:54
 */
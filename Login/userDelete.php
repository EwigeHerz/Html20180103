<?php
session_start();
include0("dbConn.inc.php");

$id = $_GET['id'];
if(isset($_SESSION['username'])){
    $query = "DELETE FROM `user` WHERE `id` =$id";
    if($mysqli->query($query)){
        echo
    }
}








/**
 * Created by PhpStorm.
 * User: Andrew Chen
 * Date: 2017/7/25
 * Time: 下午 03:44
 */
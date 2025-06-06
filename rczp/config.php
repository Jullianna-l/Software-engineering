<?php
session_start();
error_reporting(1);
// 使用 mysqli 连接数据库
$con = mysqli_connect("localhost", "root", "root", "rczp");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error()); // 使用 mysqli 的错误函数
}
// 设置字符集为 utf8
mysqli_set_charset($con, "utf8");

?>
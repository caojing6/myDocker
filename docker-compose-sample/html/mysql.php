<?php
$servername = "docker_mysql_1";
$username = "root";
$password = "123456";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} 
echo "connection successful";
?>

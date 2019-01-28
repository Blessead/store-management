<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "localhost";
$username_connect = "root";
$password_connect = "";
$database_connect = "store";

$conn = new mysqli($hostname_connect, $username_connect, $password_connect, $database_connect);

$mysqli = new mysqli($hostname_connect, $username_connect, $password_connect, $database_connect);
    if($mysqli->connect_error)
        {
        echo $mysqli->connect_error;
        }

?>
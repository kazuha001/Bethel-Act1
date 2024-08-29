<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";
$socket = "C:/xampp/mysql/mysql.sock";

$conn = new mysqli($servername, $username, $password, $database, null, $socket);

if ($conn->connect_error) {
    echo "Connect Error";
}else {
    echo "Connected";
}

$conn->close();

?>
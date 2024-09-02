<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname_id = $_POST["fname"];
$mname_id = $_POST["mname"];
$lname_id = $_POST["lname"];
$user_id = $_POST["user"];
$pass_id = $_POST["pass"];

$sql = $conn->prepare("INSERT INTO `data`(`fname`, `mname`, `lname`, `user`, `pass`) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param("sssss", $fname_id, $mname_id, $lname_id, $user_id, $pass_id);

if ($sql->execute()) {
    echo "New Row Succesfully Added";
}else {
    echo "Error";
}
}
$sql->close();
$conn->close();

?>
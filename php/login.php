<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * FROM `data`";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST";) {

$username_id = $_POST["username"];
$password_id = $_POST["password"];

if ($row['user'] === $username_id && $row['pass'] === $password_id) {
    header('Location: user.php');
    $_SESSION['islogin'] = true;
}else {
    echo "Session Destroy Can't be Access";

    exit;
}

}
$conn->close();

?>
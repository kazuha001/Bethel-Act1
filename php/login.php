<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";


$conn = new mysqli($servername, $username, $password, $database);



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username_id = $_POST["username"];
    $password_id = $_POST["password"];

   
    $stmt = $conn->prepare("SELECT * FROM `data` WHERE `user` = ? AND `pass` = ?");
    $stmt->bind_param('ss', $username_id, $password_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    
    if ($result->num_rows > 0) {
        $_SESSION['islogin'] = true;
        header('Location: user.php');
        exit;
    } else {
        sleep(2);
        echo "Invalid Operations";
        
        echo '<a href="http://localhost/Bethel-Act1-main/index.html">Go back</a>';
        
    }
    
    $stmt->close();
}
   

$conn->close();

?>

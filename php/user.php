
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS links -->
    <link rel="stylesheet" href="UserStyle/style.css">

    <link rel="stylesheet" href="UserStyle/Carrier4/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>User Log In</title>
</head>

<body class="carrier">

<div class="container">

<?php

session_start();

if (!$_SESSION['islogin']) {

    header('Location: login.php');

}else {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "userdata";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    $sql = "SELECT * FROM `data`";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_all(MYSQLI_ASSOC);

        foreach($result as $row) {
    
        echo '<div class="Carrier4">'; 
        echo '<div class="results">';
    
        echo '<h2><u>Personal Information</u></h2>';
        echo '<div><h4>First Name: </h4><p>' . $row['fname'] . '</p></div>';
        echo '<div><h4>Middle Name: </h4><p>' . $row['mname'] . '</p></div>';
        echo '<div><h4>Last Name: </h4><p>' . $row['lname'] . '</p></div>';
        echo '<h2><u>Account Information</u></h2>';
        echo '<div><h4>Username: </h4><p>' . $row['user'] . '</p></div>';
        echo '<div><h4>Password: </h4><p>' . $row['pass'] . '</p></div>';
    
        echo '</div>';
                

        }
    }

}



?>

<div class="buttons">
                    <a href="logout.php">Log Out</a>
                </div>
                
            </div>
    
        </div>
    </body>
</html>
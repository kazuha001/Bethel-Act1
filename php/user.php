
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

<body class="carrier"><!-- Carrier -->

<div class="container"><!-- Container -->

    <h1>Employees Data</h1>

<div class="headrow">
    <div>
        <label for="Employees">ID Number</label>
    </div>
    <div>
        <label for="Employees">First Name</label>
    </div>
    <div>
        <label for="Employees">Last Name</label>
    </div>
    <div>
        <label for="Employees">Gender</label>
    </div>
    <div>
        <label for="Employees">Date & Birth</label>
    </div>
    <div>
        <label for="Employees">Education</label>
    </div>
    <div>
        <label for="Employees">Contacts</label>
    </div>
    <div>
        <label for="Employees">Salary</label>
    </div>
    <div>
        <label for="Employees">Monthly</label>
    </div>
    <div>
        <label for="Employees">Yearly</label>
    </div>
</div>

<?php

session_start();

if (!$_SESSION['islogin']) {

    header('Location: login.php');

} else{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employees_data";

    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "SELECT * FROM `employees`";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_all(MYSQLI_ASSOC);

        foreach($result as $row) {

            echo '<div class="follow">';

            echo '<div>
        <label for="Employees">' . $row["id"] . '</label>
    </div>';

            echo '<div>
        <label for="Employees">' . $row["fname"] .  '</label>
    </div>';
            
            echo ' <div>
        <label for="Employees">' . $row["lname"] . '</label>
    </div>';

            echo '<div>
        <label for="Employees">' . $row["gender"] . '</label>
    </div>';

            echo '<div>
        <label for="Employees">' . $row["year_birth"] . '</label>
    </div>';

            echo ' <div>
        <label for="Employees">' . $row["education"] . '</label>
    </div>';

            echo '  <div>
        <label for="Employees">' . $row["contacts"] . '</label>
    </div>';
            
            echo '<div>
        <label for="Employees">' . $row["salary"] . ' pesos</label>
    </div>';

            echo '<div>
        <label for="Employees">' . $row["monthly"] . ' pesos</label>
    </div>';

            echo ' <div>
        <label for="Employees">' . $row["yearly"] .  ' pesos</label>
    </div>';

        }

        echo '</div>';

    }




}

$conn->close();

?>
<div class="buttons">
                    <a href="logout.php">Log Out</a>
                </div>
                
            </div><!-- Container -->
    
        </div><!-- Carrier -->
    </body>
</html>
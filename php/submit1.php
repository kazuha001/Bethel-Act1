<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "employees_data";

$conn = new mysqli($servername, $username, $password, $database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname_id = $_POST["fname"];
$lname_id = $_POST["lname"];
$gender_id = $_POST["gender"];
$year_birth_id = $_POST["yearBirth"];
$education_id = $_POST["education"];
$contacts_id = $_POST["contacts"];
$salary_id = $_POST["salary"];
$monthly_id = $_POST["monthly"];
$yearly_id = $_POST["yearly"];

$sql = $conn->prepare("INSERT INTO employees (`fname`, `lname`, `gender`, `year_birth`, `education`, `contacts`, 
`salary`, `monthly`, `yearly`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("sssssssss", $fname_id, $lname_id, $gender_id, $year_birth_id, $education_id, $contacts_id, $salary_id, $monthly_id, $yearly_id);

if ($sql->execute()) {
    echo 'Row Succesfully Added';
} else {
    echo 'Error';
}

} else {
    echo 'Invalid Action';
}

header("Location: http://localhost/Bethel-Act1-main/index1.html");

$conn->close();

?>
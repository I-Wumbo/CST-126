<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "activity1";

$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];


$conn = new mysqli($servername, $username, $password, $database);
$sql = "INSERT INTO Users (FIRST_NAME, LAST_NAME)
VALUES ('$firstname', '$lastname')";

if($conn->query($sql) === TRUE){
    echo "Success!";
} else {
    printf("Errormessage: %s\n", $conn->error);
    
}


$conn->close();
?>

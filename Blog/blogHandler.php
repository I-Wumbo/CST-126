<?php
$servername="localhost";
$username = $_POST['username'];
$password = $_POST['password'];
$database = "Blog";

$conn = new mysqli($servername, $database);
$sql = "INSERT INTO RegisteredUsers (USER_NAME, PASSWORD)
VALUES ('$username', '$password')";

if($conn->query($sql) === TRUE){
    echo "Success! User registered";
} else {
    printf("Errormessage: %s\n", $conn->error);
    
}


$conn->close();

?>
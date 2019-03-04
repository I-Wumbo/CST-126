<?php
$servername= "localhost";
$username = "root";
$password = "root";
$database = "Blog";

$registeredUsername = $_POST['username'];
$registeredPassword = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $database);
$sql = "INSERT INTO RegisteredUsers (USER_NAME, PASSWORD)
VALUES ('$registeredUsername', '$registeredPassword')";

if($conn->query($sql) === TRUE){
    echo "Success! User registered";
} else {
    printf("Errormessage: %s\n", $conn->error);
    
}


$conn->close();

?>
<?php
$servername= "localhost";
$username = "azure";
$password = "6#vWHD_$";
$database = "blog";

$registeredUsername = $_POST['username'];
$registeredPassword = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $database);
$sql = "INSERT INTO registeredusers (USER_NAME, PASSWORD)
VALUES ('$registeredUsername', '$registeredPassword')";

if($conn->query($sql) === TRUE){
    echo "Success! User registered";
} else {
    printf("Errormessage: %s\n", $conn->error);
    
}


$conn->close();

?>

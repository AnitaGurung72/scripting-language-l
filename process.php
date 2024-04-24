<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){

$fullname = filter_var($_POST['fullname'],FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$password = $_POST['password'];

if(strlen($fullname) > 40) {
    echo "Error: Full name must be up to 40 characters long.";
} 
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: Invalid email address.";
}
else if(!preg_match("/^[A-Za-z]+[0-9]+$/", $username)) {
    echo "Error: Username must start with a string and followed by a number.";
}
else if(strlen($password) <= 8) {
    echo "Error: Password must be more than 8 characters long.";
} 
else {
    $sql = "INSERT INTO users (fullname, email, username, password) 
            VALUES ('$fullname', '$email', '$username', '$password')";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}
$conn->close();
?>
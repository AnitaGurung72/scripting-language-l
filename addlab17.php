<?php

$servername="localhost";
$username="root";
$password="";
$database="basicform";

$conn = new mysqli($servername,$username,$password,$database);

if($conn){
    echo 'Database Connection Success<br>';
}
else{
    die($conn);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO lab17c (name, email, message) VALUES ('$name','$email','$message')";

if($conn->query($sql)){
    echo "Data entered successfully";
}
else{
    echo $conn->error;
}

$conn->close();
?>

<?php
$phone = $_POST['phone'];
$existingPhones = ['1234567890', '0987654321', '5555555555'];

if (in_array($phone, $existingPhones)) {
    echo 'Phone number is already registered.';
} else {
    echo 'Phone number is available.';
}
?>

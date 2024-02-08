<?php

$conn = mysqli_connect("localhost", "root", "hm0ejd74", "ACLC");

function validate($data): string
{
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return trim($data);
}

$name = validate($_POST['name']);
$email = validate($_POST['email']);
$message = validate($_POST['message']);

if (!preg_match('/@gmail\.com$/', $email)) {
    header("location: ../../pages/home.php?error=Invalid Email!");
}else if(empty($message)){
    header("location: ../../pages/home.php?error=Empty Message!");
}else{
    mysqli_query($conn , "INSERT INTO messages(name, email, message) VALUES('$name', '$email', '$message')");
    header("location: ../../pages/home.php?success=Message Sent!");
}



<?php

$conn = mysqli_connect("localhost", "root", "hm0ejd74", "ACLC");

function validate($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $full_name = ucwords(validate($_POST['FULL_NAME']));
    $email = strtolower(validate($_POST['EMAIL']));
    $pswrd = validate($_POST['PASSWORD']);
    $password = validate(md5($_POST['PASSWORD']));
    $re_password = validate(md5($_POST['RE_PASSWORD']));


    $select_email = "SELECT * FROM `accounts` WHERE email = '$email' ";
    $select_all = "SELECT * FROM `accounts` WHERE full_name ='$full_name' AND email = '$email'";

    $query_email = mysqli_query($conn, $select_email);
    $query_all = mysqli_query($conn, $select_all);

    if ((!preg_match('/@gmail\.com$/', $email))) {
        header("location: ../../signup.php?error=Invalid Gmail");
    } else if (mysqli_num_rows($query_all) > 0) {
        header("location: ../../signup.php?error=Account already registered");
    } else if (mysqli_num_rows($query_email) > 0) {
        header("location: ../../signup.php?error=Gmail already in use");
    } else if ($password != $re_password) {
        header("location: ../../signup.php?error=Password must match");
    } else if (strlen($pswrd) < 7) {
        header("location: ../../signup.php?error=Password must be 8 character");
    } else {
        mysqli_query($conn, "INSERT INTO accounts (`full_name`, `email`, `password`) VALUE ('$full_name', '$email', '$password')");
        header("location: ../../signup.php?success=Account registered!");
    }
}

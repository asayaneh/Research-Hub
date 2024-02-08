<?php
session_start();
$conn = mysqli_connect("localhost", "root", "hm0ejd74", "ACLC");

function validate($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $email = strtolower(validate($_POST['EMAIL']));
    $password = md5(validate($_POST['PASSWORD']));

    $select = "SELECT * FROM `accounts` WHERE `email`= '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            header('location: ../../pages/home.php');
            exit();
        } else {
            header('location: ../../index.php?error=Incorrect Password or Email');
        }
    } else {
        header('location: ../../index.php?error=Incorrect Password or Email');
    }

}
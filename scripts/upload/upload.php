<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'hm0ejd74', 'ACLC');

function validate($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return ucwords($data);
}

function sql_name($name): string
{
    $name = strtolower($name);
    return str_replace(' ', '', $name);
}

$table = sql_name($_SESSION['']);

if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    $title = validate($_POST['title']);
    $category = validate($_POST['category']);
    $authors = validate($_POST['authors']);
    $strand = validate($_POST['strand']);
    $description = ucfirst($_POST['description']);

    $table = sql_name($title);

    mysqli_query($conn, "INSERT INTO researches(title, authors, category, strand, description) VALUES ('$title', '$authors', '$category', '$strand', '$description')");
    mysqli_query($conn, "CREATE TABLE $table(
                        id INT AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         comment VARCHAR(255) NOT NULL
)");
    header('location: ../../pages/upload.php');
}
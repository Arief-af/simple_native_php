<?php
include "koneksi.php";


$title = $_POST['title'];
$description =  $_POST['description'];
$deadline = $_POST['deadline'];

$sql = "UPDATE tasks
SET title = $title, `description` = $description,`deadline` = $deadline
WHERE id = '$id' )";


if (mysqli_query($koneksi, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

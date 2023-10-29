<?php
include "koneksi.php";


$title = $_POST['title'];
$description =  $_POST['description'];
$deadline =$_POST['deadline'];

$sql = "INSERT INTO tasks (title, description, deadline)
 VALUES ('$title', '$description', '$deadline' )";


if (mysqli_query($koneksi, $sql)) {
    header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}


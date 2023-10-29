<?php
include "koneksi.php";


$name = $_POST['name'];
$username =  $_POST['username'];
$password =$_POST['password'];
$level =  $_POST['level'];

$sql = "INSERT INTO user (name, username, password, level)
 VALUES ('$name', '$username', '$password', '$level')";


if (mysqli_query($koneksi, $sql)) {
    header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}


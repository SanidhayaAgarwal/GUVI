<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "jurident_users";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
<!-- Coded By Harsh Anand-->
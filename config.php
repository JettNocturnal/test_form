<?php 

$server = "localhost";
$user = "root";
$pass = "Anarnajett201901685";
$database = "login_form";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
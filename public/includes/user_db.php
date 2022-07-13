<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'customers';
$con = mysqli_connect($servername, $username, $password, $db_name);
// Checking connection
if (!$con) {
    die("Connection failed to User: " . mysqli_connect_error());
}
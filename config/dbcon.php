<?php

$host  = 'localhost';
$username  = 'root';
$password  = '';
$dbname  = 'phpecomm';

$con = mysqli_connect($host, $username, $password, $dbname);

// Check database conection
if (!$con) {
    die("Connection Failed:" . mysqli_connect_errno());
} else {
    echo "Connected sucessfully";
}

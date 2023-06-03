<?php

$servername = "localhost";
$database = "smk_yappi";
$username = "root";
$password = "";

// Create Connection
$koneksi = mysqli_connect($servername, $username, $password, $database);


if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

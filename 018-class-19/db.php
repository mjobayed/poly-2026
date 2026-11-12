<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create db connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
echo "Connection successful";

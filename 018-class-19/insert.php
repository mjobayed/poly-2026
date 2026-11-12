<?php

$conn = include "./db.php";

$sql = "INSERT INTO students (name, email, phone, department) values ('John Doe', 'test01@example.com', '01234567890', 'CST')";
mysqli_query($conn, $sql);

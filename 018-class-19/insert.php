<?php

$conn = include "./db.php";

$sql = "INSERT INTO students (name, email, phone, department) values
    ('John Doe', 'test01@example.com', '01234567890', 'CST'),
    ('Jane Doe', 'test02@example.com', '01234567890', 'CST'),
    ('Jack Doe', 'test03@example.com', '01234567890', 'ENT'),
    ('Janic Doe', 'test04@example.com', '01234567890', 'CT');
    ";
mysqli_query($conn, $sql);

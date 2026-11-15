<?php

$conn = include "./db.php";

$sql = "select * from students;";

// object oriented style ->
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row["name"] . "<br />";
}

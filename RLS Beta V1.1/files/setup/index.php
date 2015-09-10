<?php
include "config.php";

// sql to create table
$sql = "CREATE TABLE usr (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(50),
password VARCHAR(50),
email VARCHAR(50),
rank VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "<meta http-equiv='refresh' content='0; url=fix.php' />";
} else {
    echo "<h1 style='color:red; font-family:sans-serif;'>Error creating table: " . $conn->error."</h1>";
}

$conn->close();


  
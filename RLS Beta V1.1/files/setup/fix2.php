<?php
include "config.php";

$sql = "ALTER TABLE `usr` ADD UNIQUE(`username`)";


if ($conn->query($sql) === TRUE) {
    echo "<meta http-equiv='refresh' content='0; url=../register.php#setupsuccess' />";
} else {
	// IF your setup has failed please copy the error given and contact the script creator (details in the readme.txt file)
    echo "<h1 style='color:red; font-family:sans-serif;'>Error setting up: " . $conn->error."</h1>";
}

$conn->close();

?>
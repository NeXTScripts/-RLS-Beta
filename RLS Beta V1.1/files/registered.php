<?php include "config.php"; ?>
<?php 
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mypassword = $_POST['password'];
	$defaultrank = "user";
	$password=md5($mypassword); // Encrypted Password
?>


<?php if(isset($_REQUEST['submit'])) { ?>
<?php
$sql = "INSERT INTO usr (username, password, email, rank)
VALUES ('$username', '$password', '$email', '$defaultrank')";

if ($conn->query($sql) === TRUE) { ?>


<meta http-equiv="refresh" content="0; url=register.php#registrationsuccess" />

<?php }
else{ ?>
<meta http-equiv="refresh" content="0; url=register.php#registrationfailed" />
<?php } ?>




 
<?php $conn->close(); ?>
<?php } ?>


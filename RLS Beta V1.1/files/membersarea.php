<?php
session_start();
ob_start();
$host="localhost";
$user="root"; 
$pass="root"; 
$db="usr";  
$tbl="usr"; 

mysql_connect("$host", "$user", "$pass")or die("cannot connect"); 
mysql_select_db("$db")or die("cannot select DB");
include 'registered.php';

$myusername=$_POST['myusername']; 
$user = $myusername;
$mypassword=$_POST['mypassword']; 
$pass = $mypassword;
$password=md5($mypassword);
$savemyusername = $myusername;
$savemypassword = $mypassword;

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl WHERE username='$myusername' and password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if($count==1){
// Cookies //
$_SESSION["pass"] = $pass;
$_SESSION["user"] = $user;

setcookie("pass", $pass, time()+3600, '/');
setcookie("user", $user,time()+3600, '/');
// END //
echo <<<EOF

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="alertgreen" id=""> 
    <alert>Welcome to the members area $user </alert>
			<a href="logout.php" style="text-decoration:none; background-color:rgba(0,0,0,0); float:right;">
				<logout>
									Logout
				</logout>
			</a>
</div>
EOF;
}

else { ?>
<meta http-equiv="refresh" content="0; url=login.php#loginfailed" />
<?php 
}

ob_end_flush();
?>

<?php
session_start();
ob_start();
$host="localhost";
$user="root"; 
$pass="root"; 
$db="usr";  
$tbl="usr"; 
$suser = $_SESSION["user"];
$spass = $_SESSION["pass"];
$shashpass=md5($spass);

mysql_connect("$host", "$user", "$pass")or die("cannot connect"); 
mysql_select_db("$db")or die("cannot select DB");

$sql="SELECT * FROM $tbl WHERE username='$suser' and password='$shashpass'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
if($count==1){
echo <<<EOF
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="alertgreen" id=""> 
    <alert>Welcome to the members area $suser</alert>
			<a href="logout.php" style="text-decoration:none; background-color:rgba(0,0,0,0); float:right;">
				<logout>
									Logout
				</logout>
			</a>
</div>
<br><br><br>
EOF;

// SHOW MEMBERS // 
include "config.php";

$sql1 = "SELECT username, email FROM usr";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo "<table><tr> <td>Email: " . $row["email"]. "</td>"."<td> - Name: " . $row["username"]. "<br></td></tr> </table>";
    }
} else {
    echo "0 results";
}
$conn->close();
// END //


} // main if

else { ?>
<meta http-equiv="refresh" content="0; url=login.php#loginfailed" />
<?php 
}

ob_end_flush();
?>

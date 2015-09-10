<link rel="stylesheet" type="text/css" href="css/style.css"> 
<div class="alertgreen" id="registrationsuccess"> 
       <a class="fontclose" style="padding-bottom:5px;" id="close" href="">x</a>
    <alert>User Registered
		<boldalert style="margin-left:0px;">
			<a href="login.php" style="text-decoration:none; background-color:rgba(0,0,0,0); color:white;">Login</a>
			</boldalert>
	</alert>
</div>

<div class="alertgreen" id="setupsuccess"> 
       <a class="fontclose" style="padding-bottom:5px;" id="close" href="">x</a>
<alert>Setup Successful
		<boldalert style="margin-left:0px;">
			</boldalert>
	</alert>
</div>

<div class="alertred" id="setupfail"> 
       <a class="fontclose" style="padding-bottom:5px;" id="close" href="">x</a>
<alert>Setup has Failed! --> For details on what went wrong, go into the fix2.php file inside the setup folder --> Further instructions will be given there
		<boldalert style="margin-left:0px;">
			</boldalert>
	</alert>
</div>


<div class="alertred" id="registrationfailed">
       <a style="float:right; text-decoration:none; color:white; font-family:Titillium Web; font-weight:200; padding-top:0px; padding-bottom:2px; padding-left:7px; padding-right:7px; -webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px; background-color:rgba(100,100,100,0.5);" id="close" href="">x</a>
    <alert>Registration Failed -- Username/Email taken </alert>
</div>
<br>
<script>
function validateForm() {
    var x = document.forms["register"]["username"].value;
    if (x == null || x == "") {
        alert("Username: Field left blank");
        return false;
    }
}
</script>
<script>
function validateForm2() {
    var x = document.forms["register"]["password"].value;
    if (x == null || x == "") {
        alert("Password: Field left blank");
        return false;
    }
}
</script>
<script>
function validateForm3() {
    var x = document.forms["register"]["email"].value;
    if (x == null || x == "") {
        alert("Email: Field left blank");
        return false;
    }
}
</script>
<table>
	<!---->
<tr>
	<form name="register" action="registered.php" method="post" onsubmit="return validateForm(), validateForm2(), validateForm3()">
<td>
	<!---->
	<tr>
		<td colspan="3"><headerlogin>User Registration</headerlogin></td>
	</tr>
	<!---->
	<tr>
		<td width="294"><input type="text" class="req" name="username" placeholder="Username" /></td>
	</tr>
	<!---->
	<tr>
		<td><input type="password" class="req" name="password" placeholder="Password" /></td>
	</tr>
	<!---->
	<tr>
	    <td><input type="text" class="req" name="email" placeholder="Email" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
			<td><input type="submit" name="submit" class="btn" value="Submit!" /></td>
	</tr>
	<tr>
		<td colspan="3"><noaccount>Already have an account? <a href="login.php" style="background-color:rgba(0,0,0,0); color:#2196F3;">Login here</a></noaccount></td>
	</tr>
</table>
</td>
</form>
</tr>
</table>
<br><br><br><br>


    
    

    
</form>

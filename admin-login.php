<?php

$Conn = mysqli_connect("localhost","root","","iec");
if(mysqli_connect_errno()){
	echo "Not Established: ".mysqli_connect_errno();
}
session_start();

// checking the user
if(isset($_POST['Login'])){
	
$AdminId = mysqli_real_escape_string($Conn,$_POST['AdminId']);
$Password = mysqli_real_escape_string($Conn,$_POST['Password']);
$sel_user = "select * from admin where AdminId='$AdminId' AND Password=md5('$Password')";
$run_user = mysqli_query($Conn, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
echo "<script>window.open('results.php','_self')</script>";
}
else {
echo "<script>alert('ID No. or password is not correct, try again!')</script>";
}
}

if(isset($_POST['register'])){
$_SESSION["register"]= $register;
echo "<script>window.open('register.php.','_self')</script>";	
}



?>


<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Login</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<link href="css/template.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<div id="wrapper">
	<div id="logo">
		<div id="image">
			<img src="images/Wil Logo.png" alt="" height="105" width="132" > <img src="images/sace.png" alt=""/> </div>	
			
			</div>
	<br>
	<nav>
		<a href="index.php">Home |</a>
		<a href="parties.html">Parties |</a>
		<a href="login.php">Login And Cast Your Vote |</a>
		<a href="station.html">Station |</a>
		<a href="contact-us.html">Contact Us |</a>
		<a href="about-us.html">About Us |</a>
		<a href="register.php">Rgister To Vote</a>			
	</nav>
	<br>
	<div align="center">
		<h1>Logged As Admin</h1>
	</div>


<form method = "POST" >
	<table align="center">
		<tr>
		  <td>Admin ID</td>
		  <td><input name="AdminId" type="text"></td>
		  
		</tr>
		
		<tr>
		   <td>Admin Password</td>
		   <td><input type="password" name="Password"></td>
		</tr>
		
		<tr>
		 <td style="height: 38px"/>
		 <td style="height: 38px">
		 <input type = "submit" name = "Login" value = "Login">
		 </td>
		 
		</tr>
	</table>
	</form>
	
	<h2>The South Africa Electoral Consignment-SAEC</h2>
		
 <div id="footer">
	 	&copy;2016 The South Africa Electoral Consignment - Developed by Tech 6
	 </div>



</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iec";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT Party, Logo, count(Party) c FROM votes group by Party order by c desc";
$result = $conn->query($sql);

if(isset($_POST['Logout']))
	{
			echo "<script>window.close();<script/>";
			header("Location: index.php");
	}


?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Parties</title>
<link href="css/template.css" rel="stylesheet" type="text/css">
</head>

<body>
		<div id="wrapper">
		
		<div id="logo">
		<div id="image">
			<img src="images/Wil Logo.png" alt="" height="105" width="132" > <img src="images/sace.png" alt=""/> </div>	
			
			</div>
					
	<nav>
				<form method="post" >
					<input name="Logout" type="submit" value="LOGOUT" style="width: 111px; height: 44px" /></form>
	</nav>
		<div id="content">
		
		<br>
								
	<!-- The main content goes here -->	
		<div id="party">
			<h3>Logged In As The Admin</h3>
		</div>
			<br>
			 
			 <div>
			 <table align="center">
		<tr>		
			<th style="height: 65px; width: 375px" >Party</th>
			<th style="width: 690px; height: 65px" align="center">Number Of Votes</th>				
		</tr>	
		<?php if ($result->num_rows > 0) { while($row = $result->fetch_assoc()){ ?>
		<tr>			
		<td align="center" style="width: 375px"><div class="images"><img alt="" height="100px" width="100px" style="margin:1px" src="<?php echo $row["Logo"]; ?>"></div></td>
		<td style="width: 690px" align="center"><?php echo $row["c"]; ?></td>		
		</tr>		
		<?php }} else { echo "0 results"; } $conn->close();  ?>
	</table>
			 
			 </div>
				
			
		</div>
			
		<br>
			
	</div>
	

</body>

</html>

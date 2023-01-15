<?php
$host ="localhost";
$dbname ="iec";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
	die ("Connection failed: " .mysqli_connect_error() );
}
else{
	echo "Connection Successfully";
}
	if(isset($_POST['insertANC']))
	{
					$query = "Insert into votes(Party, Logo) values('ANC', 'images/anc.jpg')";
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
										
							
	}
	

	if(isset($_POST['insertDA']))
	{
					$query = "Insert into votes(Party, Logo) values('DA', 'images/da.jpg')";
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
	}
	if(isset($_POST['insertAPC']))
	{
					$query = "Insert into votes(Party, Logo) values('APC', 'images/apc.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";

	}
if(isset($_POST['insertCOPE']))
	{
					$query = "Insert into votes(Party, Logo) values('COPE', 'images/cope.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";

	}
if(isset($_POST['insertEFF']))
	{
					$query = "Insert into votes(Party, Logo) values('EFF', 'images/eff.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
	}
if(isset($_POST['insertIFP']))
	{
					$query = "Insert into votes(Party, Logo) values('IFP', 'images/ifp.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
	}
if(isset($_POST['insertNFP']))
	{
					$query = "Insert into votes(Party, Logo) values('NFP', 'images/nfp.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
	}
if(isset($_POST['insertPAC']))
	{
					$query = "Insert into votes(Party, Logo) values('PAC', 'images/pac.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
	}
if(isset($_POST['insertUDM']))
	{
					$query = "Insert into votes(Party, Logo) values('UDM', 'images/udm.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					

					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";

	}
if(isset($_POST['insertAGANG']))
	{
					$query = "Insert into votes(Party, Logo) values('AGANG', 'images/agang.jpg')";	
					
					$query2 = "Update voter Set password='null' where username<> 'char(9)'";
					mysqli_query($conn,$query);
					mysqli_query($conn,$query2);
					echo("vote casted");
					
					$message = "Your Vote Has been Casted";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysqli_close($conn);
					echo "<script>window.open('index.php','_self')</script>";
					echo "<script>window.close();<script/>";
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
		CAST YOUR VOTE BY CLICKING THE 'X'. NOTE: YOU ONLY ALLOWED TO VOTE ONCE.		
	</nav>
		<div id="content">
		
		<br>
								
	<!-- The main content goes here -->	
		<div id="party">
			
		</div>
			<br>
			 
			 <div>
			 	<table style="word-spacing:100px">
			 		<tr>
			 			<th style="height: 31px; width: 102px;"></th>
			 			<th style="height: 31px; width: 592px;" ></th>
			 			<th style="height: 31px; width: 176px;" >VOTE</th>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/anc.jpg" alt="" height="81" width="94"></td>
			 			<td style="width: 592px" >ANC</td>
			 			<td style="width: 176px">
						<form method="post" style="width: 109px">
							<input type="submit" name="insertANC" value="X" style="width: 177px; height: 88px"></form>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/da.jpg" alt="" height="74" width="94"></td>
			 			<td style="width: 592px">DA</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertDA" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/agang.jpg" alt="" height="75" width="93"></td>
			 			<td style="width: 592px">agang</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertAGANG" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/apc.jpg" alt="" height="76" width="91"></td>
			 			<td style="width: 592px">APC</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertAPC" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>	
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/cope.jpg" alt="" height="74" width="95"></td>
			 			<td style="width: 592px">COPE</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertCOPE" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/eff.jpg" alt="" height="83" width="91"></td>
			 			<td style="width: 592px">EFF</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertEFF" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/ifp.jpg" alt="" height="75" width="90"></td>
			 			<td style="width: 592px">IFP</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertIFP" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/nfp.jpg" alt="" height="77" width="85"></td>
			 			<td style="width: 592px">NFP</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertNFP" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/pac.jpg" alt="" height="74" width="92"></td>
			 			<td style="width: 592px">PAC</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertPAC" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 		<tr>
			 			<td style="width: 102px">
						<img src="images/udm.jpg" alt="" height="50" width="94"></td>
			 			<td style="width: 592px">UDM</td>
			 			<td style="width: 176px"><form method="post"><input type="submit" name="insertUDM" value="X" style="width: 177px; height: 88px"></form></td>
			 		</tr>
			 	</table>
			 </div>
		</div>
		<br>
	</div>
</body>
</html>

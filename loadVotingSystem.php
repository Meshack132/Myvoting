<?php

//Drop tables and create them
$query1 = "Drop Table if exists voter"; // delete the existing table query
$query2 = "Drop Table if exists votes";
$query3 = "Drop Table if exists admin";

//create table queries
$query_Admin = "Create table Admin
(
   AdminId varchar(20) Primary Key ,
   Password Text
);";

$query_Votes = "Create table votes
(
   PartyID int Primary Key auto_increment,
   Party Text,
   Logo Text
);";

$query_Voter = "Create table voter
(
   FName Text not null,
   LName Text not null,
   Gender Text not null,
   IDNumber varchar(13) Primary Key,
   Age int,
   CellNumber varchar(10),
   Address Text,
   Email Text,
   Password Text
);";

$query_insertAdmin = "Insert into Admin
(AdminId, Password) values('Admin1', md5('Password1'));";

//Connection
$conn = new mysqli ("localhost", "root", "","iec");

//Execute queries (Drop Tables)
mysqli_query($conn, $query1);//Delete the Customer table that exists execution
mysqli_query($conn, $query2);//Delete the Order table that exists execution
mysqli_query($conn, $query3);//Delete the Item table that exists execution

//Create Tables
//if tables are created successfully
if(mysqli_query($conn, $query_Admin) && mysqli_query($conn, $query_Voter) && mysqli_query($conn, $query_Votes) && mysqli_query($conn,$query_insertAdmin))
{ echo "Tables Created Successfully and Admin inserted";}
else
{echo "Error in creating table: ". mysqli_error($conn);}

?>
<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Drop existing tables if they exist
$query1 = "DROP TABLE IF EXISTS Admin";
$query2 = "DROP TABLE IF EXISTS votes";
$query3 = "DROP TABLE IF EXISTS voter";

// Create Admin table query
$query_Admin = "CREATE TABLE Admin (
  AdminId VARCHAR(20) PRIMARY KEY,
  Password TEXT
)";

// Create Votes table query
$query_Votes = "CREATE TABLE votes (
  PartyID INT AUTO_INCREMENT PRIMARY KEY,
  Party TEXT,
  Logo TEXT
)";

// Create Voter table query
$query_Voter = "CREATE TABLE voter (
  FName TEXT NOT NULL,
  LName TEXT NOT NULL,
  Gender TEXT NOT NULL,
  IDNumber VARCHAR(13) PRIMARY KEY,
  Age INT,
  CellNumber VARCHAR(10),
  Address TEXT,
  Email TEXT,
  Password TEXT
)";

// Insert initial admin record
$query_insertAdmin = "INSERT INTO Admin (AdminId, Password) VALUES ('Admin1', MD5('Password1'))";

// Execute drop table queries
mysqli_query($conn, $query1);
mysqli_query($conn, $query2);
mysqli_query($conn, $query3);

// Execute create table queries
if (mysqli_query($conn, $query_Admin) && mysqli_query($conn, $query_Votes) && mysqli_query($conn, $query_Voter) && mysqli_query($conn, $query_insertAdmin)) {
  echo "Tables created successfully and Admin inserted.";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
$conn->close();

?>

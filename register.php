<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <title>Register-Here</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/template.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
    <div id="logo">
      <div id="image">
        <img src="images/Wil Logo.png" alt="" height="105" width="132"> <img src="images/sace.png" alt="" />
      </div>
    </div>
    <br>
    <nav>
      <a href="index.php">Home |</a>
      <a href="parties.html">Parties |</a>
      <a href="login.php">Login And Cast Your Vote |</a>
      <a href="station.html">Station |</a>
      <a href="contact-us.html">Contact Us |</a>
      <a href="about-us.html">About Us |</a>
      <a href="register.php">Register To Vote</a>
    </nav>
    <br>
    <h1>How To Vote</h1>
    <p>In order for you to cast your vote on this site, you need to be registered and logged on.</p>
    <p>Users may register below:</p>

    <div id="main">
      <div id="registerr">
        <h2>Registration Form</h2>

        <form action="" method="POST" onsubmit="return validateForm()">
          First Names: <input name="FName" type="text" id="fname" size="20" required><br><br>
          Surname: <input name="LName" type="text" id="lname" size="20" required><br><br>
          Gender: <input name="Gender" type="text" id="sex" size="20" required><br><br>
          ID Number: <input name="IDNumber" type="text" id="idNo" size="20" required><br><br>
          Age (no under 18s): <input name="Age" type="text" id="age" size="20" required><br><br>
          Cell Number: <input name="CellNumber" type="text" id="cellNo" size="20"><br><br>
          Address: <input name="Address" type="text" id="address" size="20" required><br><br>
          Email: <input name="Email" type="text" id="mail" size="20"><br><br>
          Password: <input name="Password" type="password" id="pass" size="20" required><br><br>
          <input name="Submit" type="submit" value="Submit">
        </form>

        <script>
          function validateForm() {
            var idNumber = document.getElementById("idNo").value;
            var age = document.getElementById("age").value;
            var email = document.getElementById("mail").value;
            var submitOK = true;

            if (idNumber.length !== 13) {
              alert("ID number should contain exactly 13 characters.");
              submitOK = false;
            }

            if (isNaN(age) || age < 18) {
              alert("Age must be over 18.");
              submitOK = false;
            }

            if (email.indexOf("@") === -1) {
              alert("Not a valid email address.");
              submitOK = false;
            }

            return submitOK;
          }
        </script>
      </div>
    </div>

    <h2>The South Africa Electoral Consignment-SAEC</h2>

    <div id="footer">
      &copy;2016 The South Africa Electoral Consignment - Developed by Tech 6
    </div>
  </div>

  <?php
  session_start();

  $host = "localhost";
  $dbname = "iec";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($host, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['Submit'])) {
    $FName = trim($_POST['FName']);
    $LName = trim($_POST['LName']);
    $Gender = trim($_POST['Gender']);
    $IDNumber = trim($_POST['IDNumber']);
    $Age = trim($_POST['Age']);
    $CellNumber = trim($_POST['CellNumber']);
    $Address = trim($_POST['Address']);
    $Email = trim($_POST['Email']);
    $Password = trim(md5($_POST['Password']));

    $query = "INSERT INTO voter (FName, LName, Gender, IDNumber, Age, CellNumber, Address, Email, Password) 
              VALUES ('$FName', '$LName', '$Gender', '$IDNumber', '$Age', '$CellNumber', '$Address', '$Email', '$Password')";

    if (mysqli_query($conn, $query)) {
      echo "<script>alert('You are registered. Please login to continue.')</script>";
      header('location: login.php');
      exit();
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
  ?>

</body>

</html>

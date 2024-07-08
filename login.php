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
        <img src="images/Wil Logo.png" alt="" height="105" width="132"> <img src="images/sace.png" alt="">
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
    <div align="center">
      <h1>Login Here</h1>
    </div>

    <form method="POST">
      <table align="center">
        <tr>
          <td>Username (ID Number)</td>
          <td><input name="IDNumber" type="text" required></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="Password" required></td>
        </tr>

        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="Login" value="Login">
            <input type="submit" name="register" value="Register">
          </td>
        </tr>
      </table>
    </form>

    <h2>The South Africa Electoral Consignment-SAEC</h2>

    <div id="footer">
      &copy;2016 The South Africa Electoral Consignment - Developed by Tech 6
    </div>
  </div>

  <?php

  session_start();

  $Conn = mysqli_connect("localhost", "root", "", "iec");
  if(mysqli_connect_errno()){
    echo "Connection failed: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['Login'])) {
    $IDNumber = mysqli_real_escape_string($Conn, $_POST['IDNumber']);
    $Password = mysqli_real_escape_string($Conn, $_POST['Password']);

    $query = "SELECT * FROM voter WHERE IDNumber='$IDNumber' AND Password=MD5('$Password')";
    $result = mysqli_query($Conn, $query);

    if(mysqli_num_rows($result) == 1) {
      // Login successful
      $_SESSION['IDNumber'] = $IDNumber;
      header("Location: vote.php");
      exit();
    } else {
      // Login failed
      echo "<script>alert('ID Number or password is incorrect, please try again.')</script>";
    }
  }

  if(isset($_POST['register'])) {
    header("Location: register.php");
    exit();
  }

  mysqli_close($Conn);

  ?>
</body>

</html>

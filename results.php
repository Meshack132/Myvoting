<?php
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

// Query to fetch party names, logos, and count of votes
$sql = "SELECT Party, Logo, COUNT(Party) AS vote_count FROM votes GROUP BY Party ORDER BY vote_count DESC";
$result = $conn->query($sql);

// Handle logout action
if (isset($_POST['Logout'])) {
  session_start();
  session_destroy();
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Parties</title>
  <link href="css/template.css" rel="stylesheet" type="text/css">
  <style>
    table {
      width: 80%;
      margin: auto;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    .logo {
      width: 100px;
      height: 100px;
    }
  </style>
</head>

<body>
  <div id="wrapper">
    <div id="logo">
      <div id="image">
        <img src="images/Wil Logo.png" alt="" height="105" width="132"> <img src="images/sace.png" alt="" />
      </div>
    </div>

    <nav>
      <form method="post">
        <input name="Logout" type="submit" value="LOGOUT" style="width: 111px; height: 44px" />
      </form>
    </nav>

    <div id="content">
      <br>
      <div id="party">
        <h3>Logged In As The Admin</h3>
      </div>
      <br>

      <div>
        <table>
          <thead>
            <tr>
              <th style="width: 50%">Party</th>
              <th style="width: 50%">Number Of Votes</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='" . $row["Logo"] . "' alt='" . $row["Party"] . "' class='logo'></td>";
                echo "<td>" . $row["vote_count"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='2'>0 results</td></tr>";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <br>
  </div>
</body>

</html>

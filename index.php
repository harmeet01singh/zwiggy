<?php
$servername = "localhost";
$username = "harmeet";
$password = "root";
$dbname = "zwiggy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";

$sql = "SELECT * FROM hotel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["hotel_id"]." <br>";
    }
  } else {
    echo "0 results";
  }
?>

<html>
    <head>
        <title>Zwiggy</title>
    </head>
    <body>
        <a href="./Frontend/Admin/sidebar.php">Admin sidebar</a><br>
        <a href="./Frontend/User/pageTemplates/itemProfile.php">Item Profile</a><br>
        <a href="./landing.php">Landing</a><br>
        <a href="./Frontend/User/pageTemplates/menu.php">Menu</a><br>
    </body>
</html>

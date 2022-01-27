<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "table1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sno, name, dest FROM trip1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "sno.: " . $row["sno"]. " - Name: " . $row["name"]. " " . $row["dest"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

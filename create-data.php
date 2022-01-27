<?php

//conecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "table1";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());

}else{
    echo "connection was successful<br>";
}

//variables to be inserted into the table
$name = "rahul";
$destination = "raipur";

//sql query to be inserted into the table
$sql = "INSERT INTO `trip1`(`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//add a new trip to the trip tabe in the database
if ($result){
echo "the record has been inserted successfully!<br>";
}
else{
echo "the record was not inserted successfully! because of this error --->".mysqli_error($conn);
}

?>
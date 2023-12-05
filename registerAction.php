<?php

$first = $_GET['first'];
$last = $_GET['last'];
$user = $_GET['user'];
$pswd = password_hash($_GET['pswd'], PASSWORD_DEFAULT);
$email = $_GET['email'];
$phone = $_GET['phone'];
$securityQ = $_GET['securityQ'];
$securityA = $_GET['securityA'];
$gender = $_GET['gender'];
if (isset($_GET['CS'])) {
  $cs = 1;
} else {
  $cs = 0;
}
if (isset($_GET['CIS'])) {
  $cis = 1;
} else {
  $cis = 0;
}
$usertype = "customer";

// construct the sql statement to add these values into the table
$sql = "insert into user values (0, '$first', '$last', '$user', '$pswd', 
    '$email', '$phone', '$securityQ', '$securityA', '$cs', '$cis','$gender', 'customer')";

// connect to the database
require 'DBConnect.php';

// Process the sql command using the PHP code with connection object.
if ($conn->query($sql) === TRUE) {
  echo "<h2>Data update successful</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
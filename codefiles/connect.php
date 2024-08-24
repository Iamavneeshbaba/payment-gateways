<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "sketch0506A";
$dbdata = "paymentsystem";

try {
    // Create connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbdata);

    // Check connection
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }

    // Your other code here if the connection is successful

} catch (Exception $e) {
    echo "Connected unsuccessfully: " . $e->getMessage();
    // You can log the error or perform other actions as needed
}

?>
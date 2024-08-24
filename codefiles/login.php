<?php
require("connect.php");


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "SELECT * from FROM paymentsystem.users WHERE username = '$username' AND passwordd = '$password'";

	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];

		$message = "Dear "."$firstname"."$lastname"."you are successfully logged in.";

		echo($message);
	}
}


?>
<?php
require("connect.php");


if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$date = date('Y-m-d H:i:s');
	if($password != $cpassword)
	{
		echo "<script type='text/javascript'>alert('Password and Confirm password not matched');</script>";
	}
	else{
		$sql = "INSERT INTO paymentsystem.users(firstname, lastname, username, passwordd,createdDate)values('$firstname','$lastname','$email','$password','$date')";
		// $checksql = "select id from paymentsyatem.users where email= '$email' ";
		// if(){
		// 	echo "<script type='text/javascript'>alert('User Exists');</script>";
       	// 	header( "Refresh:0.01; url=../login-form/index.html", true, 303);
		// }
		// else{
		try {
			if ($conn->query($sql) === TRUE) {
   			echo "<script type='text/javascript'>
            alert('Registration Successful');</script>";
            header( "Refresh:0.01; url=../login-form/index.html", true, 303);          
        }    

        else {
        echo "<script type='text/javascript'>alert('User Exists');</script>";
        header( "Refresh:0.01; url=../login-form/index.html", true, 303);
    
	

	}
		} catch (Exception $e) {
			echo "<script type='text/javascript'>alert('User Exists');</script>";
        header( "Refresh:0.01; url=../login-form/index.html", true, 303);
		}
		
}
}


?>
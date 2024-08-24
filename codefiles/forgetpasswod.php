<?php
require("connect.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "SELECT username, passwordd FROM paymentsystem.users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['username'];  //email is stored in the username column
        $password = $row['passwordd'];

        // Email details
    //     $subject = "Your Account Details on avneeshbaba";
    //     $message = "Here are your account details:\n\nUsername: $username\nPassword: $password";
    //     $headers = "From: m8789802057@gmail.com"; 

    //     // Send email
    //     if (mail($email, $subject, $message, $headers)) {
    //         echo "Email sent successfully!";
    //     } else {
    //         echo "Failed to send email.";
    //     }
    // } else {
    //     echo "No user found with that username.";
    // }


        $message = "Here are your account details:\n\nUsername: $username\nPassword: $password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget password</title>
	<link rel="stylesheet" href="../login-form/css/style.css" />
</head>
<body>
	<div class="container clearfix">
            <div class="form pass-reset">
                <a class="logo" href="">
                    <img src="../login-form/img/logo.png" alt="Logo" />
                </a>
                <form action="../codefiles/forgetpasswod.php" method="post">
                    <?php
                    	echo $message;
                    ?>
                    <p>
                        <label>
                            <a href="../login-form/index.html">Got my password</a>
                        </label>
                        
                    </p>
                </form>
            </div>
        </div>
</body>
</html>
<?php 
mysqli_close($conn);

?>
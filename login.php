<?php
session_start();
include 'functions.php';
$connection=db_connect();

if(isset($_POST['submit'])){
	$user =$_POST['username'];
	// $pass = $_POST['password'];
	$pass = md5($_POST['password']);

	// print_r($pass);exit;

$query="SELECT * FROM members WHERE username='$user' and password='$pass'";
$result = mysqli_query($connection, $query);


$check_user=mysqli_num_rows($result);
if($check_user>0){
	$_SESSION["username"]=$user;
	echo $_SESSION["username"];
	echo "congractulations!!!!!!!!!!!!!!!!!!!!!!!!!";
    //header('location:mainpage.php');
}

else {
	echo "username or password is not correct";
}

}

?>
			<!DOCTYPE html>

			<html>
			<head>
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <link href="css/bootstrap.css" rel="stylesheet">
				 <link href="css/font-awesome.min.css" rel="stylesheet">
				 <link href="css/style.css" rel="stylesheet">
				 <script src="js/respond.js"></script>
			</head>
			<title>Login</title>
			<body>
				<h1>KULLABS</h1>
<fieldset style="width:30%"><legend>LOG-IN HERE</legend>
<form method="POST" action="login.php">
Username <br><input type="text" name="username" value="" size="40" required><br>
Password <br><input type="password" name="password" size="40" required><br>
<input id="button" type="submit" name="submit" value="Log-In"><br>
<a href="signup.php">Get an account</a><br>
</form>
</fieldset>
</div>

		
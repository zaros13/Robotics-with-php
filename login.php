<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['id'])){ //Check if the user is already logged in
	header("Location: user.php");
}

if ($_POST['submit']){ //Form checking
	include_once('connection.php');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT id, username, password FROM users WHERE username = '$username' AND activated = '1' LIMIT 1"; //Database query

	$query = mysqli_query($dbCon, $sql);

	if ($query){
		$row = mysqli_fetch_row($query);
		$dbUsername = $row[1];
		$dbPassword = $row[2];
		$dbId = $row[0];
	}

	if ($username == $dbUsername && $password == $dbPassword){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $dbId;
		header("Location: user.php");
	}else{
		echo "Incorrect username or password";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Titanium Tigers</title>
</head>
<body>
    <p>Currently new accounts cannot be registered.  We apologize for the inconvenience.  Click <a href="index.php">here</a> to return home or <a href="contact.php">here</a> to contact us.</p>
    <h2>Log in</h2>
    <form action="login.php" method="post">
    	<input type="text" placeholder="username" name="username">
    	<br>
    	<input type="password" placeholder="password" name="password">
    	<br>
    	<input type="submit" value="Log In" name="submit">
    </form>
</body>
</html>

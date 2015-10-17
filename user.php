<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['id'])){
	include_once("connection.php");
	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];

	$sql_home = "SELECT info, sponsors FROM home WHERE Current = true";
	$query_home = mysqli_query($dbCon, $sql_home);
	$sql_about = "SELECT info, competition, sponsors FROM about WHERE Current = true";
	$query_about =  mysqli_query($dbCon, $sql_about);


	if($query_home){
		$row_home = mysqli_fetch_row($query_home);
		$home_info = $row_home[0];
		$home_sponsors = $row_home[1];
	}

	if($query_about){
		$row_about = mysqli_fetch_row($query_about);
		$about_info = $row_about[0];
		$about_competition = $row_about[1];
		$about_sponsors = $row_about[2];
	}

}else{
	header("Location: index.php");
	die();
}
?>
<DOCTYPE html>
<html>
<head>
    <title><?php echo $username ?> - Home</title>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
	<h2>Home:</h2>
	<form action="update.php" method="post">
		<textarea name="home_info"><?php echo $home_info?></textarea><br><br>
		<textarea name="home_sponsors"><?php echo $home_sponsors?></textarea><br><br>
	<h2>About:</h2>
		<textarea name="about_info"><?php echo $about_info?></textarea><br><br>
		<textarea name="about_competition"><?php echo $about_competition?></textarea><br><br>
		<textarea name="about_sponsors"><?php echo $about_sponsors?></textarea><br><br>
		<input type="submit" value="submit" name="submit">
	</form>

	</form>

	<form action="logout.php">
	<input type="submit" value="Log Out">
</form>
</body>
</html>

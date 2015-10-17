<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if(isset($_SESSION['id'])){
	if(isset($_POST['submit'])){
		include_once("connection.php");
		$home_info = $_POST['home_info'];
		$home_sponsors = $_POST['home_sponsors'];
		$about_info = $_POST['about_info'];
		$about_competition = $_POST['about_competition'];
		$about_sponsors = $_POST['about_sponsors'];
		$sql_update = "UPDATE about SET info = '$about_info', competition = '$about_competition', sponsors = '$about_sponsors' WHERE Current = 1";
		mysqli_query($dbCon, $sql_update);
		$sql_update = "UPDATE home SET info = '$home_info', sponsors = '$home_sponsors' WHERE Current = 1";
		mysqli_query($dbCon, $sql_update);
		header("Location: index.php");
	}
}else{
	die();
}
?>

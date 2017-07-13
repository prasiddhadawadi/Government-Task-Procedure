<?php 
session_start();

if ($_SESSION['login'] == true)

{
	if($_SESSION['id'] == $_GET['id'])
	{
		$conn= mysqli_connect("localhost", "root", "", "fyp");
		mysqli_query($conn, "DELETE FROM requests WHERE user_id =".$_GET['id']);
		header("location:profile.php"); 

	}else{
		header("location:profile.php?unauthorized");
	}
}
else {
	header("location:index.php");
}
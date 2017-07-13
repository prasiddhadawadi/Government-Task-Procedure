<?php 
session_start();

if ($_SESSION['login'] == true)


	{
		$conn= mysqli_connect("localhost", "root", "", "fyp");
		mysqli_query($conn, "DELETE FROM users WHERE id =".$_GET['id']);
		header("location:user.php"); 

	}

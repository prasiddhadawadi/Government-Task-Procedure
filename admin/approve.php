<?php 

session_start();
$conn = mysqli_connect("localhost", "root", "", "fyp");

if($_GET['id'])
{
	mysqli_query($conn, "UPDATE requests SET status = '1' WHERE id =".$_GET['id'] );
	$_SESSION['success'] = $_GET['id'];
	header("location:requests.php");
}
if($_GET['did'])
{
	mysqli_query($conn, "DELETE FROM requests WHERE id =".$_GET['did'] );
	$_SESSION['error'] = $_GET['did'];
	header("location:requests.php");
}

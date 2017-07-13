<?php 

session_start();
$conn = mysqli_connect("localhost", "root", "", "fyp");

if($_GET['id'])
{

	mysqli_query($conn, "DELETE FROM feedbacks WHERE id =".$_GET['id'] );
	$_SESSION['success'] = "DELETED";
	header("location:feedbacks.php");

}

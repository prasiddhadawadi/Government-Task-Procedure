<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "fyp");
if(@$_SESSION['login'] == true){
	if ($_GET['id'])
{
	   $username = $_SESSION['user'];
    $id = $_GET['id'];
    $user = mysqli_query($conn, "SELECT * FROM user_data WHERE user_id = '$id'")->fetch_assoc();
    $place = $user['pob'];
    
}
else
{
	header('location:profile.php');
}
}
 
else
{
	session_destroy();
	header('location:profile.php');
}
$request = mysqli_query($conn, "INSERT INTO requests (user_id, place) VALUES ('$id', '$place')");
header('location:profile.php');

?>
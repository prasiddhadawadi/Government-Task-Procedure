<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "fyp");

$email= $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$email' AND password = '$password' ");
$row = mysqli_num_rows($query);

if($row > 0){
	$user = $query->fetch_assoc();
 $_SESSION['user'] = $email;
 $_SESSION['id'] = $user['id'];
 $_SESSION['role'] = $user['admin'];
 $_SESSION['login'] = true;

if($_SESSION['role'] == 1)
{
 header("location:admin/index.php");
}
else {
	header("location:index.php");
}

} else{
	header("location:loginform.php?authentication=invaid");
	

}
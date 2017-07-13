<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fyp");
if($_SESSION['login'] == true && $_SESSION['role'] == 1){
    $username = $_SESSION['user'];
    $id = $_SESSION['id'];
    
    $query = mysqli_query($connect, "SELECT * FROM user_data WHERE user_id = '$id' ");
    $rows = mysqli_num_rows($query);
}else
{
    session_destroy();
    header("location:../loginform.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="../css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body style="background-color:white;" style="text-align:justify;">
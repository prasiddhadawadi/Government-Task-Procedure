<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'fyp');

mysqli_query($conn, "DELETE FROM users WHERE id =".$_SESSION['id']);
session_destroy();
header('location:index.php');
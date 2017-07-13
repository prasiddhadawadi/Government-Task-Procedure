<?php

session_start();
session_unset($_SESSION['User']);
session_unset($_SESSION['Id']);
session_destroy();
header("location:index.php?user=logout");
?>
<?php
session_start();
$connection = mysqli_connect('172.17.0.2', 'root', 'root', 'gtp');
if (!$connection)
{
	die('Could not connect: ' . mysql_error());
}

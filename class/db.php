<?php

$connection = mysqli_connect('localhost', 'root', '', 'gtp');
if (!$connection)
{
	die('Could not connect: ' . mysql_error());
}
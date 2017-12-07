<?php
$db=mysqli_connect('127.0.0.1','root','','Rubix');

if (mysqli_connect_errno()) {
	echo "Database connection with following errors".mysqli_connect_error();
	die();
	# code...
}


$result= "SELECT * FROM MOVIES";



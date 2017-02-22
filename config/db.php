<?php
#for starting to use header
ob_start();

#create a session if exist or does not exist
if (!isset($_SESSION)) {
		session_start();
}


#initialise the database variable
$host = 'localhost';
$user = 'root';
$pass = '';

#create varible
$db_name = 'PHPCrud';

#connection to db
$connection = mysqli_connect($host, $user, $pass, $db_name);

#check for connection if correctly established
if (!$connection) {
	die("Cnnection to DB is Failed. " . mysqli_error($connection));
}


?>
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', '123');
define('DB_NAME', 'products');

//connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//check conn

if($conn->connect_error)
{
	die('connection failed' . $conn->connect_error);
}
else{

}
?>
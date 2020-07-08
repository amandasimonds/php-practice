<?php

$dbServerName = "localhost";

//default xampp is root, and no password
$dbUserName = "root";
$dbPassword = "";
$dbName = "loginsystem";

//you must include the params in this order
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

//you don't need to close the php tags if this is all php
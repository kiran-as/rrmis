<?php
$username = "root";
$password = "password";
$hostname = "localhost"; 
$updated_date = date('Y-m-d H:i:s');
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

mysql_select_db("testing",$dbhandle) 
  or die("Could not select College");
session_start();
?>

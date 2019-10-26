<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="users_table";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword);

if(!$connection)
{
  exit("database connection failed" .mysqli_error($connection));
}

// connect the database
$select_db=mysqli_select_db($connection, $dbName);
if(!$select_db)
{
  die("database selection failed" .mysqli_error($connection));
}

?>

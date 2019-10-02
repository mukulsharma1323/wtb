<?php
// configure the database 
$connection = mysqli_connect('localhost','epiz_24538687','Gui9Dvo5og');
if(!$connection)
{
  exit("database connection failed" .mysqli_error($connection));
}
// connect the database
$select_db=mysqli_select_db($connection,'epiz_24538687_witb');
if(!$select_db)
{
  die("database selection failed" .mysqli_error($connection));
}
?>
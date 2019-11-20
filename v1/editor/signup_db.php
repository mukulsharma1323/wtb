<?php
// configure the database 

include('db_config.php');

// receive values from HTML FORM as POST method 
if(isset($_POST['mobile']) && isset($_POST['password']))
{
  $Email=$_POST['mobile'];
  $Password=$_POST['password'];
  $code=$_POST['code'];
// echo values to test the variables, if they have value or not.
// echo "$Shop_name";
// echo "$Password";
// echo "$Email";
// insert values into database

 $query="INSERT INTO editors (Email,Password,Code)Values('$Email','$Password','$code')";
  $result = mysqli_query($connection, $query);
  if($result)
  {
    header("location: index.php");
  }
  else
  {
    echo "user Registration failed";
  }
}
?>
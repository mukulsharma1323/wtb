<?php
// configure the database

include('db_config.php');

// receive values from HTML FORM as POST method
if(isset($_POST['mobile']) && isset($_POST['password']))
{
  $Mobile=$_POST['mobile'];
  $Password=$_POST['password'];
  $Shop_name=$_POST['shop_name'];
// echo values to test the variables, if they have value or not.
// echo "$Shop_name";
// echo "$Password";
// echo "$Email";
// insert values into database

 $query="INSERT INTO vendor (Mobile,Password,Shop_Name)Values('$Mobile','$Password','$Shop_name')";
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

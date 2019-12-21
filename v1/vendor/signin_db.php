<?php
include('db_config.php');
// receive values from HTML FORM as POST method
if(isset($_POST['email']) && isset($_POST['password']))
{
  $Mobile=$_POST['mobile'];
  $Pass=$_POST['password'];
// echo values to test the variables, if they have value or not.
// echo "$Email";
// echo "$Pass";
// Checking the values are existing in the database or not
$query = "SELECT * FROM `vendor` WHERE mobile='$Mobile' and password='$Pass'";
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
  // echo "successfully login";

  $row=mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['mobile'] = $row['mobile'];
 header("location: index.php");
}else{
//If the login credentials doesn't match, he will be shown with an error message.
// echo "Invalid Login Credentials.";
        header("location: signin.php");
}

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
	header("location: index.php");
}else{
//If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
}
}
?>

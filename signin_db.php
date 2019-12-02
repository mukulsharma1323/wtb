<?php 

include('db_config.php');
        	if(isset($_POST['email']) && isset($_POST['password']))
					{
					  $Email=$_POST['email'];
					  $Pass=$_POST['password'];
					  $res= mysqli_query($connection, "select * from users where email='$Email' and password='$Pass'") or die("Failed to query database".mysqli_error());
					  $row= mysqli_fetch_array($res);
					  if($row['email'] == $Email && $row['password'] == $Pass)
					  {
						header("location: index.php");
					  }
					  else
					  {
            	echo '<center><h2 style="color:red;">Invalid Username or Password</h2></center>';
            }
					}

        ?>
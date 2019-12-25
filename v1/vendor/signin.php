<!DOCTYPE html>
<html>
<head>
	<title>Login Vendor</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php 

include 'db_config.php';
 
 

        if(isset($_POST['login'])){
          if(isset($_POST['mobile']) && isset($_POST['password']))
          {
            $Mobile=$_POST['mobile'];
            $Pass=$_POST['password'];
            $res= mysqli_query($connection, "select * from vendors where mobile='$Mobile' and password='$Pass'") or die("Failed to query database".mysqli_error());
            $row= mysqli_fetch_array($res);
            if($row['mobile'] == $Mobile && $row['password'] == $Pass)
            {
              session_start();
                        //setcookie('log1', $auname);
                        $_SESSION['id']=$row['id'];
            header("location: index.php");
            }
            else
            {
              echo '<center><h4 style="color:red;">Invalid Username or Password</h4></center>';
            }
          }
        }
?>
        	<link rel="stylesheet" href="../css/bracket.css">
</head>
<body>
	 <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Where is to<span class="tx-info"> Buy</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Login panel for Vendor</div>
<form action="signin.php" method="POST" >
        <div class="form-group">
          <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile no.">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
          <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
        </div><!-- form-group -->
        <button type="submit" name="login" class="btn btn-info btn-block">Sign In</button>
</form>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="signup.php" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

</body>
</html>

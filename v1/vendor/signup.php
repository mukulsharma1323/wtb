<!DOCTYPE html>
<html>
<head>
	<title>SignUp Vendor</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>WITB</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <?php
include 'db_config.php';

    if(isset($_POST['register']))
                {
                    if(isset($_POST['mobile']) && isset($_POST['password']) && isset($_POST['shop_name']))
                    {
                        if($_POST['password'] == $_POST['conpassword'])
                        {
                            
                          $Password=$_POST['password'];
                          
                          $Mobile=$_POST['mobile'];
                          $Shop=$_POST['shop_name'];
                            $noonefound=0;
                            $re1= mysqli_query($connection, "select * from vendors");
              while($row = mysqli_fetch_array($re1))
              {
                if($row['mobile'] == $Mobile)
                {
                  echo '<center><h3><b style ="color:red"> *This mobile is already registered.</b></h3></center>';
                  $noonefound=1;
                  break;
                }
              }
              if(!$noonefound){
                              $query="INSERT INTO vendors (mobile,password,shop_name) Values('$Mobile','$Password','$Shop')";
                              $result = mysqli_query($connection, $query);
                              if($result)
                              {
                                echo '<center><h3><b style ="color:green"> Successfully Registered. Please Login</b></h3></center>';
                                
                              }
                              else
                              {
                                echo "Error: " . $query . "<br>" . mysqli_error($connection);
                              }
                        }
                        }
                      else
                      {
                        echo '<center><h3><b style ="color:red"> *Both passwords must match</b></h3></center>';
                      }
                    }
                    else
                    {
                        echo '<center><h3><b style ="color:red"> *Please provide all details</b></h3></center>';

                    }
                }
                 ?>
	
</head>
<body>
	 <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Where Is To <span class="tx-info">Buy</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">SignUp Panel for Vendor</div>

    <form action="signup.php" method="POST" >
        <div class="form-group">
          <input type="number" class="form-control" name="mobile" placeholder="Enter your Mobile" minlength="10" maxlength="10" required>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="conpassword" placeholder="Enter password again" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="shop_name" placeholder="Enter your Shop Name" required>
        </div>
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <!-- <button type="submit" class="btn btn-info btn-block" value="submit" >Sign Up</button> -->
        <input type="submit" class="btn btn-info btn-block" value="Sign Up" name="register">
    </form>
    
        <div class="mg-t-40 tx-center">Have already account? <a href="signin.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
</body>
</html>

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
	
</head>
<body>
	 <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Where Is To <span class="tx-info">Buy</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">SignUp Panel for Editor</div>

    <form action="signup_db.php" method="POST" >
        <div class="form-group">
          <input type="text" class="form-control" name="mobile" placeholder="Enter your Mobile">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="text" class="form-control" name="shop_name" placeholder="Enter your Code">
        </div>
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <!-- <button type="submit" class="btn btn-info btn-block" value="submit" >Sign Up</button> -->
        <input type="submit" class="btn btn-info btn-block" value="Sign Up" name="">
    </form>
    
        <div class="mg-t-40 tx-center">Have already account? <a href="signin.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
</body>
</html>

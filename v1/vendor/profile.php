<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>
 <?php 
 		include 'db_config.php';
 		include 'sidebar.php';
    include 'top-navbar.php';
     ?>
       <?php
       	if(isset($_POST['update']))
       	{
       		$id = 1;
       		$fname = $_POST["firstname"]; 
			$lname = $_POST["lastname"];
			$mobile = $_POST["mobile"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$city = $_POST["city"];
			$address = $_POST["address"];
      $pinc = $_POST["pincode"];
			$shop = $_POST['shopname'];
      $status = $_POST['status'];     
			$query = "UPDATE vendors SET firstname='$fname',
									lastname='$lname',
									mobile='$mobile',
									email='$email',
									password='$password',
									city='$city',
									address='$address',
                  pinc='$pinc',
									shop_name='$shop',
                  status='$status'
									WHERE id=$id";
			$result = mysqli_query($connection,$query);
			
			if($result)
			{
				header("location: profile.php");
			}
			else
			{
				echo "Error: " . $query . "<br>" . mysqli_error($connection);
			}
			
			
       	}

       ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel br-profile-page">

      <div class="card shadow-base bd-0 rounded-0 widget-4">
        <div class="card-header ht-75">
          
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <img src="https://via.placeholder.com/500" alt="">
          </div><!-- card-profile-img -->
          <!-- <h4 class="tx-normal tx-roboto tx-white">Katherine M. Pechon</h4> -->
          <!-- <p class="mg-b-25">Wine Connoisseur</p> -->

        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Profile</a></li>
          <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Settings</a></li> -->
        </ul>
      </div>
      <?php
              
                $id=1;
                $result = mysqli_query($connection, "Select * FROM vendors WHERE id=$id");
                $r = mysqli_fetch_array($result);
                $fname = $r['firstname'];
                $lname = $r['lastname'];
                $mobile = $r['mobile'];
                $email = $r['email'];
                $address = $r['address'];
                $password = $r['password'];
                $city = $r['city'];
                $code = $r['pinc'];
                $shop = $r['shop_name'];
                $status = $r['status'];

              ?>
<form action="profile.php" method="POST">
	<div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
                <div class="row">
                  
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">First Name*</label>
                  <input type="text" name="firstname" parsley-trigger="change"  class="form-control" id="fname" value="<?php echo $fname;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Last Name*</label>
                  <input type="text" name="lastname" parsley-trigger="change"  class="form-control" id="lname" value="<?php echo $lname;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Mobile*</label>
                  <input type="number" name="mobile" parsley-trigger="change"  class="form-control" id="mobile"
                  value="<?php echo $mobile;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Email*</label>
                  <input type="email" name="email" parsley-trigger="change"  class="form-control" id="email" value="<?php echo $email;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Password*</label>
                  <input type="text" name="password" parsley-trigger="change"  class="form-control" id="pass" value="<?php echo $password;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">City*</label>
                  <input type="text" name="city" parsley-trigger="change"  class="form-control" id="city" value="<?php echo $city;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Address*</label>
                  <textarea class="form-control unicase-form-control text-input" rows = "3" cols = "50" name = "address" required><?php echo $address;?></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Pin Code*</label>
                  <input type="number" name="pincode" parsley-trigger="change"  class="form-control" id="code" value="<?php echo $code;?>" required>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Shop Name*</label>
                  <input type="text" name="shopname" parsley-trigger="change"  class="form-control" id="sname" value="<?php echo $shop;?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="brandName">Shop Status*</label>
                  <select class="form-control" name="status">
                      <option value="Enable" selected>Enable</option>
                      <option value="Disable">Disable</option>
                  </select>
                </div>
              </div>
              
                
                </div>
                              <div class="tx-center mg-t-15 mg-xs-t-30 ">

                <button class="btn btn-info" type="submit" value="submit" name="update">Update</button>
              </div>
              </div><!-- card -->


            </div><!-- col-lg-8 -->
            
          </div><!-- row -->
        </div><!-- tab-pane -->
       
        <!-- <div class="tab-pane fade" id="photos">
          <div class="row">
            <div class="col-lg-12">
              <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
                <p>setting</p>

              </div>
            </div>
            
          </div>
        </div> -->
        
      </div>
</form>
      <!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1199px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1199px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1200px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>

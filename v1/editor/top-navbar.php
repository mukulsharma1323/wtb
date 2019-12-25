    <!-- ########## START: HEAD PANEL ########## -->
    <?php
      include 'db_config.php';
      session_start();
      $id = $_SESSION['id'];
      $result = mysqli_query($connection, "Select * FROM editors WHERE id=$id");
      $r = mysqli_fetch_array($result);
     ?>
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <!-- <span class="logged-name hidden-md-down">Katherine</span> -->
              <img src="../img/blank-profile.png" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="../img/blank-profile.png" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname"><?php echo $r['firstname']; ?></h6>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="profile.php?id=<?php echo $r['id']; ?>"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <!-- <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li> -->
                <!-- <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li> -->
                <!-- <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li> -->
                <!-- <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li> -->
                <li><a href="signout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <!-- <i class="icon ion-ios-chatboxes-outline"></i> -->
            <!-- start: if statement -->
            <!-- <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span> -->
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

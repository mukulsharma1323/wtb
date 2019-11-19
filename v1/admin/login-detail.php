<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>WITB</title>
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- vendor css -->
    
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    

  </head>

  <body>
    <?php 
      include'sidebar.php';
      include'top-navbar.php';
      include 'db_config.php';
       ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <!-- <i class="icon ion-ios-home-outline"></i> -->
        <div>
          <!-- <h4>Dashboard</h4> -->
          <!-- <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p> -->
        </div>
      </div>
      <?php $results = mysqli_query($connection, "SELECT * FROM vendors"); ?>
      <div class="br-pagebody">
      <!-- form-layout --><div class="br-section-wrapper">
      <h6 class="br-section-label">Login Details</h6>
      <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Vendor Name</th>
                  <th>Shop Name</th>
                  <th>IP Address</th>
                  <th>Registration Time</th>
                    
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
               <span> <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['firstname']; ?></td>
                  <td><?php echo $row['shop_name']; ?></td>
                  <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
                  <td><?php echo $row['reg_date']; ?></td>
                </tr></span>
               
                <?php } ?>
              </tbody>
            </table></div>
          </div>
    <?php 
      include'footer.php';
       ?>
  </body>
</html>

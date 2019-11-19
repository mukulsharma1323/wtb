<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

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
      include"sidebar.php";
      include"top-navbar.php";
      include "db_config.php";
       ?>
       <?php 

          if(isset($_GET['eid'])) 
          {
            $id=$_GET['eid'];
            mysqli_query($connection, "UPDATE vendors SET status='Enable' WHERE id=$id");
            header('location: maintain-shop.php');

          }
          if(isset($_GET['did'])) 
          {
            $id=$_GET['did'];
            mysqli_query($connection, "UPDATE vendors SET status='Disable' WHERE id=$id");
            header('location: maintain-shop.php');

          }

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

      <div class="br-pagebody">
      <div class="br-section-wrapper">

        <?php $results = mysqli_query($connection, "SELECT * FROM vendors"); ?>
      <!-- form-layout --><h6 class="br-section-label">Enable/Disable Shops</h6>
      <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>Shop Name</th>
                  <th>Vendor Name</th>
                  <th>Current Status</th>
                  <th>Enable/Disable Shop</th>
              
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                  
               
               <span> <tr>
                  
                  <td><?php echo $row['shop_name']; ?></td>
                  <td><?php echo $row['firstname']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  
                  <td><span><a href="maintain-shop.php?eid=<?php echo $row['id']; ?>" class="btn btn-teal" style="height:38px; margin-top:-5px;">Enable</a> &nbsp;
                    <a href="maintain-shop.php?did=<?php echo $row['id']; ?>" class="btn btn-danger" style="height:38px;margin-top:-5px;">Disable</a></span>
                  </td>
                  

                </tr><span>
                
                <?php } ?>
              </tbody>
            </table>
          </div>
</div>
    <?php 
      include'footer.php';
       ?>
  </body>
</html>

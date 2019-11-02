

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
      include'sidebar.php';
      include'top-navbar.php';
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
      <!-- form-layout --><div class="br-section-wrapper">
      <h6 class="br-section-label">Edit/Delete Products</h6>
      <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Brand Name</th>
                  <th>Price</th>
              
                </tr>
              </thead>
              <tbody>
               <span> <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                  <td><span><a href="edit-product.php" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-edit"></i></div></a><a href="delete-product.php" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-trash-alt"></i></div></a></span></td>

                </tr><span>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                  <td><span><a href="edit-product.php" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-edit"></i></div></a><a href="edit-product.php" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-trash-alt"></i></div></a></span></td>
                 
                </tr>
                
              </tbody>
            </table></div>
          </div>
    <?php 
      include'footer.php';
      ?>
  </body>
</html>

<?php  
 
     include'sidebar.php';
      include'top-navbar.php';
      include 'db_config.php';
 
 $query ="SELECT * FROM products ORDER BY ID DESC";  
 $result = mysqli_query($connection, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
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
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>
      </head>  
      <body>  
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
      <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <th>ID</th>
                  <th>Product Name</th>
                  <th>Brand Name</th>
                  <th>Vendor Name</th>
                  <th>Price(Rs.)</th>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            $vid = $row['vendor_id'];
                     $results = mysqli_query($connection, "SELECT firstname FROM vendors WHERE id=$vid;");
                     $r = mysqli_fetch_row($results);
                               echo '  
                               <tr>  
                                    <td>'.$row['id'].'</td>  
                                    <td>'.$row['product_name'].'</td>  
                                    <td>'.$row['brand_name'].'</td>  
                                    <td>'.$r[0].'</td>  
                                    <td>'.$row['selling_price'].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>    
           </div>  
         </div>
       </div>
      </body>  

 </html>  
 
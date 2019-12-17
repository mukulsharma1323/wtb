
<?php  
 
     include'sidebar.php';
      include'top-navbar.php';
      include 'db_config.php';
 
 $query ="SELECT * FROM products ORDER BY ID DESC";  
 $result = mysqli_query($connection, $query);  
 ?><!DOCTYPE html>
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
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style type="text/css">
  .dt-button{
    font: bold 13px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  }
</style>

</head>
<body class="content-fuid">
 <div class="br-mainpanel">
      <div class="br-pagetitle">
        <!-- <i class="icon ion-ios-home-outline"></i> -->
        <div>
          <!-- <h4>Dashboard</h4> -->
          <!-- <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p> -->
        </div>
      </div>
<div class="">
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            
            <!-- /.card-header -->
            
              <div class="br-pagebody">
      <!-- form-layout --><div class="br-section-wrapper">
      <h6 class="br-section-label">Edit/Delete Products</h6>
      <div class="bd bd-gray-300 rounded table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 	<th>ID</th>
                  <th>Product Name</th>
                  <th>Brand Name</th>
                  <th>Vendor Name</th>
                  <th>Price(Rs.)</th>
                  <th></th> 
                </tr>
                </thead>
                <tbody>
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
                                    <td> <span><a href="edit-product.php?id='.$row['id'].'" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-edit"></i></div></a><a href="delete-product.php?id='.$row['id'].'" class="btn btn-danger btn-icon mg-r-5 mg-b-10"><div style="height:20px"><i class="fas fa-trash-alt"></i></div></a></span> </td>

                               </tr>  
                               ';  
                          }  
                          ?>  
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

            <!-- /.card-body -->
        
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
 <!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script>
  $(function () {
    $("#example1").DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
  });
</script>

</body>
</html>

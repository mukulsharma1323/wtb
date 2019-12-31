<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="robots" content="all">
<title>Where Is To Buy</title>

<!-- Bootstrap Core CSS -->

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->

	<?php
	include 'navbar.php';
	include 'db_config.php';

	$query ="SELECT * FROM vendors";  
	$result = mysqli_query($connection, $query);
	?>
	<div class="table-responsive">
	<table id="example1" class="table table-sm table-bordered table-striped">
                <thead>
                <tr>
                  <th>Vendor Name</th>
                  <th>Shop Name</th>
                  <th>Address</th>
                  <th></th> 
                </tr>
                </thead>
                <tbody>
                  <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            
                               echo '  
                               <tr>  
                                    <td>'.$row['firstname'].'</td>  
                                    <td>'.$row['shop_name'].'</td>  
                                    <td>'.$row['address'].'</td>  
                                    
                                    <td> <span><a href="vendor.php?id='.$row['id'].'" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div style="height:20px">View Details</div></a></span> </td>

                               </tr>  
                               ';  
                          }  
                          ?>  
                
                </tbody>
              </table>
          </div>
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
      buttons: []
    });
  });
</script>
</body>
</html>
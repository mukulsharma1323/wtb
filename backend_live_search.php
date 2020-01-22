<?php  require "db_config.php";
error_reporting(0);
$output = '';
if(isset($_POST["product_query"]))
{
 $search = mysqli_real_escape_string($connection, $_POST["product_query"]);
 $query = "
  SELECT category,product_name,brand_name,MRP FROM products 
  WHERE product_name LIKE '%".$search."%'
  ";
}
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover table-striped">
    <tr>
     <th>Category</th>
     <th>Product Name</th>
     <th>Brand Name</th>
     <th>MRP</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["category"].'</td>
    <td>'.$row["product_name"].'</td>
    <td>'.$row["brand_name"].'</td>
    <td>'.$row["MRP"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>
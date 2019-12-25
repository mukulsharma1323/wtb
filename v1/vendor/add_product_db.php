<?php
// session_start();
//     if(isset($_SESSION['Email'])){
//     }else{
//     header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
//     exit();
//     }
// configure the database 
include('db_config.php');

// receive values from HTML FORM as POST method 
if(isset($_POST['productname']))
{
	session_start();
	$id=$_SESSION['id'];
 $brandname = $_POST["brandname"]; 
 $category = $_POST["category"]; 
 $subCategory = $_POST["subCategory"]; 
 $productname = $_POST["productname"]; 
 $productcode = $_POST["productcode"]; 
 $productdescription = $_POST["productdescription"]; 
 $productquantity = $_POST["productquantity"]; 
 $mrp = $_POST["mrp"]; 
 $sellingprice = $_POST["sellingprice"]; 
 $hsncode = $_POST["hsncode"]; 

//create directory for uploading files if directory does not exist

if (!is_dir("uploads/images/")) {
    mkdir("uploads/images/", 0777, true);
}

if(isset($_FILES['productimage'])){
      $errors= array();
      $file_name = $_FILES['productimage']['name'];
      $file_size =$_FILES['productimage']['size'];
      $file_tmp =$_FILES['productimage']['tmp_name'];
      $file_type=$_FILES['productimage']['type'];
      echo $file_name;
      move_uploaded_file($file_tmp,"uploads/images/".$file_name);
         
      
   }

$query="INSERT INTO products 
	(vendor_id,
	brand_name, 
	category, 
	sub_category, 
	product_name, 
	product_code, 
	description, 
	image_url, 
	quantity, 
	MRP, 
	selling_price, 
	HSN_code, 
	fk_link, 
	sd_link, 
	az_link, 
	x_link, 
	y_link)
Values
	('$id',
	'$brandname', 
	'$category', 
	'$subCategory', 
	'$productname', 
	'$productcode', 
	'$productdescription', 
	'$file_name', 
	'$productquantity', 
	'$mrp', 
	'$sellingprice', 
	'$hsncode', 
	'', 
	'', 
	'', 
	'', 
	''
	)";
  $result = mysqli_query($connection, $query);
  if($result)
  {
    // echo "Data created successfully";
    header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/add-product.php?status=success");
  }
  else
  {
    // echo " Failed";
    // echo("Error description: " . mysqli_error($connection));
    header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/error.php");
  }
}
?>
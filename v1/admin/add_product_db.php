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

// if (!is_dir("uploads/images/")) {
//     mkdir("uploads/images/", 0777, true);
// }

// if(isset($_FILES['licencefile'])){
//       $errors= array();
//       $file_name = $_FILES['licencefile']['name'];
//       $file_size =$_FILES['licencefile']['size'];
//       $file_tmp =$_FILES['licencefile']['tmp_name'];
//       $file_type=$_FILES['licencefile']['type'];
//       $file_name = str_replace(' ', '_', $file_name);

//       if(empty($errors)==true){
//          move_uploaded_file($file_tmp,"uploads/images/".$file_name);
//          echo "Success";
//       }else{
//          print_r($errors);
//       }
//    }

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
	('12',
	'$brandname', 
	'$category', 
	'$subCategory', 
	'$productname', 
	'$productcode', 
	'$productdescription', 
	'http://google.com', 
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
    echo "Data created successfully";
  }
  else
  {
    echo " Failed";
    echo("Error description: " . mysqli_error($connection));
  }
}
?>
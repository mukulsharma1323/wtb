<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WITB</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>

    <?php 
      include 'sidebar.php';
      
      include 'db_config.php';
       ?>
       <?php
       	if(isset($_POST['update']))
       	{
       		$id = $_POST['id'];
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

			mysqli_query($connection, "UPDATE products SET brand_name='$brandname',
									product_name='$productname',
									category='$category',
									sub_category='$subCategory',
									product_code='$productcode',
									description='$productdescription',
									quantity='$productquantity',
									MRP='$mrp',
									selling_price='$sellingprice',
									HSN_code='$hsncode' WHERE id=$id");
			
			header('location:view-product.php');
			
			
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
	<?php
              if(isset($_GET['id'])) 
              {
                $id=$_GET['id'];
                $result = mysqli_query($connection, "Select * FROM products WHERE id=$id");
                $r = mysqli_fetch_array($result);
                $bname = $r['brand_name'];
                $pname = $r['product_name'];
                $pcode = $r['product_code'];
                $des = $r['description'];
                $qua = $r['quantity'];
                $mrp = $r['MRP'];
                $sprice = $r['selling_price'];
                $hsn = $r['HSN_code'];


              }
           ?>
<form action="edit-product.php" method="POST" >  
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Edit Product</h6>
          
         
        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="brandName">Enter Brand Name*</label>
                  <input type="text" name="brandname" parsley-trigger="change"  class="form-control" id="bName" value="<?php echo $bname;?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="Category">Select Category*</label>
                  <select class="form-control" name="category"  onchange="getcategory(this.value)">
                      <option value="Electronic">Electronic</option>
                      <option value="Apperals">Apperals</option>
                  </select>
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-12">
                <div class="form-group">
                  <label for="subCategory">Select Sub Category*</label>
                  <select class="form-control" name="subCategory"  onchange="getsubcategory(this.value)">
                      <option value="Mobiles">Mobiles</option>
                      <option value="Mobile Accessories">Mobile Accessories</option>
                      <option value="Laptops">Laptops</option>
                      <option value="Tablets">Tablets</option>
                      <option value="Speakers">Speakers</option>
                      <option value="Camera">Camera</option>
                      <option value="Smart Wearable Tech">Smart Wearable Tech</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productName">Enter Product Name*</label>
                  <input type="text" name="productname" parsley-trigger="change"  class="form-control"
                  value="<?php echo $pname;?>" id="pName">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productCode">Enter Product Code*</label>
                  <input type="text" name="productcode" parsley-trigger="change"  class="form-control" id="pCode" value="<?php echo $pcode;?>">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productDescription">Enter Product Description*</label>
                  <input type="text" name="productdescription" parsley-trigger="change"  class="form-control" id="pDescription" value="<?php echo $des;?>">
                </div>
              </div>
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productQuantity">Enter Product Quantity*</label>
                  <input type="number" name="productquantity" parsley-trigger="change"  class="form-control" id="pQuantity" value="<?php echo $qua;?>">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="MRPPrice">Enter MRP Price*</label>
                  <input type="text" name="mrp" parsley-trigger="change"  class="form-control" id="mrpPrice" value="<?php echo $mrp;?>">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="sellingPrice">Enter Selling/Discounted Price*</label>
                  <input type="text" name="sellingprice" parsley-trigger="change"  class="form-control" id="sPrice"value="<?php echo $sprice;?>">
                </div>
              </div>
               <div class="col-lg-12">
                <div class="form-group">
                  <label for="HSNCode">Select HSN Code*</label>
                  <select class="form-control" name="hsncode"  onchange="gethsncode(this.value)">
                      <option value="1">Select HSN Code</option>
                  </select>
                </div>
              </div>
            </div><!-- row -->
            <div class="form-layout-footer">
            	<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              <button class="btn btn-info" name="update" value="submit">Update</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div>
      </div>

</form>

      <?php 
      include'footer.php';
       ?>


  </body>
</html>

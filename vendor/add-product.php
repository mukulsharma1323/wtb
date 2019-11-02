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

<form action="add_product_db.php" method="POST" >  
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Add Product</h6>

        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="brandName">Enter Brand Name*</label>
                  <input type="text" name="brandname" parsley-trigger="change"  class="form-control" id="bName">
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
                  <input type="text" name="productname" parsley-trigger="change"  class="form-control" id="pName">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productCode">Enter Product Code*</label>
                  <input type="text" name="productcode" parsley-trigger="change"  class="form-control" id="pCode">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productDescription">Enter Product Description*</label>
                  <input type="text" name="productdescription" parsley-trigger="change"  class="form-control" id="pDescription">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                <label for="profuctImage">Enter Product Image*</label><br>
                <input type="file" name="productimage" id="file-1" class="inputfile"
                    data-multiple-caption="{count} files selected" multiple>
                    <label for="file-1" class="tx-white bg-info">
                      <i class="icon ion-ios-upload-outline tx-24"></i>
                      <span>Choose a file...</span>
                    </label>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="productQuantity">Enter Product Quantity*</label>
                  <input type="number" name="productquantity" parsley-trigger="change"  class="form-control" id="pQuantity">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="MRPPrice">Enter MRP Price*</label>
                  <input type="text" name="mrp" parsley-trigger="change"  class="form-control" id="mrpPrice">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="sellingPrice">Enter Selling/Discounted Price*</label>
                  <input type="text" name="sellingprice" parsley-trigger="change"  class="form-control" id="sPrice">
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
              <button class="btn btn-info" value="submit">Save</button>
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

<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>WITB</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="bracket.css">
</head>
<body>
<div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Add Product</h6>

        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="userName">Enter Brand Name*</label>
                  <input type="text" name="brand" parsley-trigger="change" required="" class="form-control" id="userName">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="userName">Select Category*</label>
                  <select class="form-control" name="cat" required="" onchange="getsubcategory(this.value)">
                      <option value="">Select Category</option>
                  </select>
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div>
      </div>
</body>
</html>

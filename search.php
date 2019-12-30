<?php  require "db_config.php"; ?>

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
	<?php 
		include 'navbar.php';

		echo '<div class="container-fluid">';
		$query=$_GET['product_query'];
		$query=htmlspecialchars($query); 
		$query=mysqli_real_escape_string($connection,$query);		
		$results=mysqli_query($connection,"SELECT * FROM products WHERE `product_name` LIKE '%".$query."%'") or die(mysqli_error());
		if(mysqli_num_rows($results)>0){            
			echo '<br/><h2>'.mysqli_num_rows($results).' product(s) found:</h2>'.'<br/>';
			echo '<ul class="list-group">';
			while($result=mysqli_fetch_array($results)){
				echo '<li class="list-group-item list-group-item-success">'
						.'<h3>'.$result['product_name'].'</h3>'
						.'<h4><strong>Brand Name -> </strong>'.$result['brand_name'].'</h4>'
					.'</li>'
					.'<br/>';
			}
			echo '</ul>';
		} else{
			echo '<br/><h2>Oops!</h2>'.'<br/>';
			echo '<ul class="list-group" style="margin-bottom:50vh;">';
				echo '<li class="list-group-item list-group-item-danger">'
						.'<h4><strong>No match found!</strong></h4>'
					.'</li>';
			echo '</ul>';
		}
		echo '</div>';
		
		include 'footer.php';
	?>
</body>
</html>	
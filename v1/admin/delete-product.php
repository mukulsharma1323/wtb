<?php
	include('db_config.php');

	$id=$_GET['id'];
	$result = mysqli_query($connection, "DELETE FROM products WHERE id=$id");
	header('location:view-product.php');
 ?>
<?php
include 'connection.php';

// echo print_r($_GET);

 if (isset($_GET['checkout'])) {
 	$delete_id = $_GET['checkout'];
 	$delete_query=mysqli_query($conn, "Delete from foods where id =$delete_id") or die("Query failed");
 	if ($delete_query) {
 		header('location:cart.php');
 	}
 	else{
 		echo "Product not deteled";
 		header('location:cart.php');
 	}
 	

 	//$delete_query = mysqli_query
 }

?>
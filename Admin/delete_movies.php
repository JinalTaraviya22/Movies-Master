<?php

	$ID=$_GET['ID'];
	
	include 'conn.php';
	
	$sql="delete from movies where ID='$ID'";
	$data=mysqli_query($con,$sql);
	
	if($data)
	{
		header('location:movies_reviews.php');
	}
	else
	{
		echo "Error.";
	}

?>
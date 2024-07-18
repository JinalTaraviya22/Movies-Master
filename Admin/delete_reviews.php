<?php 
        $ID= $_GET['ID'];
        include 'conn.php';
 
	$sql = "delete from reviews where ID='$ID'";
	$data = mysqli_query($con,$sql);
	if ($data)
	{
		header ('location: show_reviews.php');
	}
	else
	{
		echo "error";
	}
?>


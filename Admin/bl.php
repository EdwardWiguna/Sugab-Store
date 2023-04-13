<?php
include ("db_connection.php");

if (isset($_request["btnAddCategory"]))
{
	$catName = $_POST["txtName"];
	$catDescription = $_POST["txtDescription"];
	
	if ( mysqli_query($con, "INSERT INTO category (cat_name,cat_description) VALUES ('$catName','$catDescription')"))
	{
		echo "<script>alert('Record inserted!');</script>";
	}
	else
	{
		echo $con->error;
	}
}


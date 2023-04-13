<?php
include('db_connection.php');
if(isset($_POST['btnAddCategory'])){
    $catName = $_POST["txtName"];
	$catDescription = $_POST["txtDescription"];

    //select data from database
    $select_query="Select * from `category` where cat_name='$catName'";
    $result_select=mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('Record is already present in database')</script";
    }else{
        $insert_query="insert into `category` (cat_name,cat_description) values ('$catName','$catDescription')";

        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Record inserted!')</script>";
        } 
    }
}
?>
<h2 class="text-center">Add Category</h2>
<form action "" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
<label>Category Name </label>
<input type="text" name="txtName" >
</div>
<div class="input-group w-90 mb-2">
<label> Category Description </label>
<input type="text" name="txtDescription" >
</div>


<input type="submit" class="bg-success border-0 p-2 text-white" name="btnAddCategory" value="Add Category">
</form>

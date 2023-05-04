<?php
include('db_connection.php');

if(isset($_POST['btnAddCategory'])){
    $catName = $_POST["cat_name"];
    $catDescription = $_POST["cat_description"];

    // check for empty fields
    if(empty($catName) || empty($catDescription)){
        echo "<script>alert('Please fill all fields.')</script>";
    }else{
        // select data from database
        $select_query = "SELECT * FROM `category` WHERE cat_name = '$catName'";
        $result_select = mysqli_query($con, $select_query);

        if(mysqli_num_rows($result_select) > 0){
            echo "<script>alert('Record is already present in the database.')</script>";
        }else{
            $insert_query = "INSERT INTO `category` (cat_name, cat_description) VALUES ('$catName','$catDescription')";
            $result = mysqli_query($con, $insert_query);

            if($result){
                echo "<script>alert('Record inserted!')</script>";
            } 
        }
    }
}
?>
<body>
<div class="container">
<h2 class="text-center mb-3">Add Category</h2>

<form action="" method="post" class="mb-2">

<div class="form-outline w-50 mb-2 m-auto">
<label for="cat_name" class="form-label">Category Name </label>
<input type="text" name="cat_name" id="cat_name" class="form-control" autocomplete="off" >
</div>  

<div class="form-outline w-50 mb-2 m-auto">
<label for="cat_description" class="form-label"> Category Description </label>
<input type="text" name="cat_description" id="prd_description" class="form-control" autocomplete="off" >
</div>

<div class="form-outline w-50 mb-2 m-auto">
<input type="submit" class="bg-success border-0 p-2 text-white btn mt-2 px-3" name="btnAddCategory" value="Add Category">
</div>

</form>
</div>
</body>

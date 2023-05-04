<?php
include('db_connection.php');
if(isset($_POST['btnAddProducts'])){
    $prd_name=$_POST['prd_name'];
    $prd_description=$_POST['prd_description'];
    $prd_keywords=$_POST['prd_keywords'];
    $prd_category=$_POST['prd_category'];
    $prd_price=$_POST['prd_price'];
    $prd_status='true';

    //accessing images
    $prd_image=$_FILES['prd_image']['name'];

    //temp image where image is stored when image is initally uploaded into the form
    $temp_image=$_FILES['prd_image']['tmp_name'];

    //checking empty fields
    if($prd_name=='' or $prd_description=='' or $prd_price=='' or $prd_keywords=='' or $prd_category=='' or
    $prd_image=='' ){
        echo "<script>alert('Please fill the fields')</script>";
    }else{
        move_uploaded_file($temp_image,"./prd_images/$prd_image");

        //insert query
        $add_products="insert into `product` (prd_name,
        prd_description,prd_keywords,cat_id,prd_img,prd_price,
         prd_date, prd_status) values ('$prd_name','$prd_description','$prd_keywords',
         '$prd_category','$prd_image','$prd_price',NOW(),'$prd_status')";
        $result_query=mysqli_query($con,$add_products);
        if($result_query){
            echo "<script>alert('Product Added')</script>";
        }
    }
}
?>
<body>
<div class="container">

<h2 class="text-center mb-3">Add Product</h2>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-outline w-50 mb-2 m-auto">
<label for="prd_name" class="form-label">Product Name </label>
<input type="text" name="prd_name" id="prd_name" class="form-control" autocomplete="off" require="required" >
</div>

<div class="form-outline w-50 mb-2 m-auto">
<label for="prd_price" class="form-label"> Product Price </label>
<input type="text" name="prd_price" id="prd_price" class="form-control" autocomplete="off" >
</div>

<div class="form-outline w-50 mb-2 m-auto">
<label for="prd_description" class="form-label"> Product Description</label>
<input type="text" name="prd_description" id="prd_description" class="form-control" autocomplete="off" >
</div>

<div class="form-outline w-50 mb-4 m-auto">
<label for="prd_keywords" class="form-label"> Product Keywords </label>
<input type="text" name="prd_keywords" id="prd_keywords" class="form-control" autocomplete="off" >
</div>

<div class="form-outline w-50 m-auto">
<select name="prd_category" class="form-select">
    <option>Select Category</option>
    <?php
    $select_query="Select * from `category`";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $cat_name=$row['cat_name'];
        $cat_id=$row['cat_id'];
        echo "<option value='$cat_id'>$cat_name</option>";
    }
    ?>

</select>
</div>

<div class="form-outline w-50 mb-2 mt-2 m-auto">
<label for="prd_image" class="form-label"> Product Image </label>
<input type="file" name="prd_image" id="prd_image" class="form-control" autocomplete="off" >
</div>

<div class="form-outline w-50 mb-2 mt-2 m-auto">
<input type="submit" class="bg-success border-0 p-2 text-white btn mt-2 px-3" 
name="btnAddProducts" value="Add Product">
</form>
</div>

</div>
</body>
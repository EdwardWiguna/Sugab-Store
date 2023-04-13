<?php
include('db_connection.php');
?>
<form action "bl.php" method="post">
<div class="input-group w-90 mb-2">
<label>Product Name </label>
<input type="text" name="txtName" >
</div>

<div class="input-group w-90 mb-2">
<label> Product Price </label>
<input type="text" name="txtDescription" >
</div>

<div class="input-group w-90 mb-2">
<label> Product Description</label>
<input type="text" name="txtDescription" >
</div>

<div class="input-group w-90 mb-2">
<label> Product Quantity </label>
<input type="text" name="txtDescription" >
</div>

<input type="submit" name="btnAddCategory" value="Add Category">
</form>

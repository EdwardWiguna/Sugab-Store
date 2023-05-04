<?php

//include('./Admin/db_connection.php');

//displaying products in homepage cards
function getproducts(){
    global $con;


    //selecting products by rand 
    if(!isset($_GET['category'])){
    $select_query="SELECT * FROM `product` ORDER BY RAND() LIMIT 0,12";
    $result_query=mysqli_query($con, $select_query);

    while($row=mysqli_fetch_assoc($result_query)){
        $prd_id=$row['prd_id'];
        $prd_name=$row['prd_name'];
        $prd_description=$row['prd_description'];
        $prd_img=$row['prd_img'];
        $prd_price=$row['prd_price'];
        $cat_id=$row['cat_id'];
        echo "<div class='col-sm-6 col-md-3'>
                <div class='card mt-3 mx-auto' style='width: 17rem; height: 26rem;'>
                  <a href='productDesc.php?prd_id=$prd_id'><img src='./admin/prd_images/$prd_img' class='card-img-top' alt='...'></a>
                  <div class='card-body'>
                    <a href='productDesc.php?prd_id=$prd_id' class='text-decoration-none'>
                      <h5 class='card-title text-truncate text-black'>$prd_name</h5>
                    </a>
                    <p class='card-text mb-1 text-truncate'></p>
                    <p class='card-text mb-1 fw-bolder text-truncate'>RP$prd_price</p>
                    <a href='productDesc.php?prd_id=$prd_id' class='btn btn-success'>View More</a>
                  </div>
                </div>
            </div>";
    }
  }
}


//function that will show products according to their category
function getcat(){
    global $con;


    //condition to check isset
    if(isset($_GET['category'])){
        $cat_id=$_GET['category'];
    $select_query="SELECT * FROM `product` WHERE cat_id=$cat_id";
    $result_query=mysqli_query($con, $select_query);

    while($row=mysqli_fetch_assoc($result_query)){
        $prd_id=$row['prd_id'];
        $prd_name=$row['prd_name'];
        $prd_description=$row['prd_description'];
        $prd_img=$row['prd_img'];
        $prd_price=$row['prd_price'];
        $cat_id=$row['cat_id'];
        echo "<div class='col-sm-6 col-md-3'>
                <div class='card mt-3 mx-auto' style='width: 17rem; height: 26rem;'>
                  <a href='productDesc.php?prd_id=$prd_id'><img src='./admin/prd_images/$prd_img' class='card-img-top' alt='...'></a>
                  <div class='card-body'>
                    <a href='productDesc.php?prd_id=$prd_id' class='text-decoration-none'>
                      <h5 class='card-title text-truncate text-black'>$prd_name</h5>
                    </a>
                    <p class='card-text mb-1 text-truncate'></p>
                    <p class='card-text mb-1 fw-bolder text-truncate'>RP$prd_price</p>
                    <a href='productDesc.php?prd_id=$prd_id' class='btn btn-success'>View More</a>
                  </div>
                </div>
            </div>";
    }
  }
}



//displaying categories in category button dropdown
function categoryDropdown(){
    global $con;
    $select_category="SELECT * FROM `category`";
    $result_category=mysqli_query($con,$select_category);
    while($row=mysqli_fetch_assoc($result_category)){
        $cat_name=$row['cat_name'];
        $cat_id=$row['cat_id'];
        echo "
        <li class='nav-item'>
                <a href='home.php?category=$cat_id' class='nav-link text-dark dropdown-item'>
                    <span style='text-transform: capitalize; display:inline-block; 
                    padding:5px; border-radius: 5px; 
                    text-align:center; width:100%;'>$cat_name</span>
                </a>
              </li>";
    }    
}

// function for searching products
function searchProducts(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data=$_GET['search_data']; 

    $search_query="SELECT * FROM `product` WHERE `prd_keywords` LIKE '%$search_data%'";

    $result_query=mysqli_query($con, $search_query);

    $row_num=mysqli_num_rows($result_query);
    if($row_num==0){
      echo "<div style='text-align: center;'>
            <h2 class='text-center'> Query doesn't match any items </h2>
            </div>";
    } else {
      while($row=mysqli_fetch_assoc($result_query)){
        $prd_id=$row['prd_id'];
        $prd_name=$row['prd_name'];
        $prd_description=$row['prd_description'];
        $prd_img=$row['prd_img'];
        $prd_price=$row['prd_price'];
        $cat_id=$row['cat_id'];
        echo "<div class='col'>
                <div class='card h-100'>
                  <a href='productDesc.php?prd_id=$prd_id'><img src='./admin/prd_images/$prd_img' class='card-img-top' alt='...'></a>
                  <div class='card-body'>
                    <a href='productDesc.php?prd_id=$prd_id' class='text-decoration-none'>
                      <h5 class='card-title text-truncate text-black'>$prd_name</h5>
                    </a>
                    <p class='card-text mb-1 fw-bolder text-truncate'>RP$prd_price</p>
                    <a href='productDesc.php?prd_id=$prd_id' class='btn btn-success'>View More</a>
                  </div>
                </div>
              </div>";
      }
    }
  }
}


//function to further show product information from the view more button
function productDesc() {

  global $con;

  // condition to check isset
  if (isset($_GET['prd_id'])) {
    $prd_id = $_GET['prd_id'];
    $select_query = "SELECT * FROM `product` WHERE prd_id=$prd_id";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
      $prd_id = $row['prd_id'];
      $prd_name = $row['prd_name'];
      $prd_description = $row['prd_description'];
      $prd_img = $row['prd_img'];
      $prd_price = $row['prd_price'];
      $cat_id = $row['cat_id'];
      echo "
        <div class='col-md-6'>
          <img src='./admin/prd_images/$prd_img' alt='Your Image' class='mx-auto d-block' style='width: 500px; height:500px; object-fit: contain;'>
        </div>
        <div class='col-md-6 mt-5'>
          <h2>$prd_name</h2>
          <div class='container' style='background-color: #fafafa; padding:5px'>
          <h3 class='ml-3' id='initialPrice'>$prd_price</h3>
          </div>
          <div class='row mt-3'>
              <div class='col-md-6 border'>
                  <p class='mt-2' style='text-align: justify; text-justify: inter-word;'>$prd_description</p>
              </div>
              <div class='col-md-6 border'>
                <div class='input-group mt-2' style='max-width: 150px;'>
                  <div class='input-group-prepend'>
                    <button class='btn btn-outline-secondary' type='button' id='decrement-btn' onclick='decrement(); updateTotalPrice();'>-</button>
                  </div>
                  <input type='number' id='quantity' name='quantity' min='1' max='10' value='1' class='form-control text-center' onchange='updateTotalPrice()'>
                  <div class='input-group-append'>
                    <button class='btn btn-outline-secondary' type='button' id='increment-btn' onclick='increment(); updateTotalPrice();'>+</button>
                  </div>
                </div>
                <div class='d-flex justify-content-between'>
                  <p>Subtotal</p>
                  <p id='total-price'><strong>$prd_price</strong></p>
                </div>
                <button type='button' class='btn btn-success mt-3' style='width: 100%;'><strong>+ Keranjang</strong></button>
                <button type='button' class='btn btn-outline-success mt-2' style='width: 100%;'> Beli Langsung</button>
                <div class='d-flex mt-3 justify-content-center'>
                  <a href='#' style='text-decoration: none;' class='mx-3'>
                    <img src='img/love.png' alt='' class='me-3'>
                    <span class='text-muted'><strong>Wishlist</strong></span>
                  </a>
                  <p>|</p>
                  <a href='#' style='text-decoration: none;' class='mx-3'>
                    <img src='img/share.png' alt='' class='me-3'>
                    <span class='text-muted'><strong>Share</strong></span>
                  </a>
                </div>                  
              </div>
          </div>
        </div>
      ";
  }
}

}



?>
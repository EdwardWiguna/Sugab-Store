<?php
include('admin/db_connection.php');
include('functions/common_functions.php');
?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog | SugabStore</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #75db8f;">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="Home.php" style="font-variant: small-caps;">Sugab Store</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">

              <li class="nav-item px-1">
                <a class="nav-link active" aria-current="page" href="Catalog.php">Product</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li>
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="mt-1">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/cuki.png" alt="Dropdown Image">
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="user_area/login.php">Login</a></li>
                    <li><a class="dropdown-item" href="user_area/signup.php">Register</a></li>
                  </ul>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="top: 56px; z-index:1; margin-bottom:150px ">
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="d-flex justify-content-start gap-3 mx-3">
            <button type="button" class="btn btn-secondary">Promo</button>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php
              categoryDropdown();
              ?>
              </ul>
            </div>
          </div>
          <div class="d-flex justify-content-center flex-grow-1">
          <form class="d-flex" role="search" action="Catalog.php" method="get">
              <input class="form-control me-3 col-8" type="search" placeholder="Search SugabStore" 
              aria-label="Search" name="search_data">
              <input type="submit" value="Search" class="btn btn-outline-success" name="search_data_product">
            </form>
          </div>
          <div class="d-flex justify-content-end gap-3 mx-3">
            <a href="#" class="btn-primary"><img src="img/shopping-cart.png" alt="" class="nav-item px-1"></a>
            <a href="#" class="btn-primary"><img src="img/chat.png" alt="" class="nav-item px-1"></a>
            <a href="#" class="btn-primary"><img src="img/bell.png" alt="" class="nav-item px-1"></a>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top:125px;">
  <h2 class="my-4 text-center"> Search Catalog </h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 justify-content-center align-items-center">
        <?php
        searchProducts();
        ?>
          
      </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
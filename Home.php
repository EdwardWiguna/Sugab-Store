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
    <link rel="stylesheet" href="style.css">
    <script src="home.js"></script>
    <title>Home Page | SugabStore</title>
</head>
<body style="overflow-x: hidden;">
  <!--First Navbar: The Green One-->  
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #75db8f;">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="Home.php" style="font-variant: small-caps;">Sugab Store</a>
          <div class="collapse navbar-collapse" id="  navbarSupportedContent">
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
                <div class="dropdown" style="position:relative; z-index:99">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/cuki.png" alt="Dropdown Image">
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="left:auto; right:0; z-index:999;">
                    <li><a class="dropdown-item" href="user_area/login.php">Login</a></li>
                    <li><a class="dropdown-item" href="user_area/signup.php">Register</a></li>
                  </ul>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <!--Second Navbar: The Grey One-->
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="top: 56px; z-index:1;">
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="d-flex justify-content-start gap-3 mx-3">
            <button type="button" class="btn btn-secondary">Promo</button>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </button>
              <ul class="dropdown-menu position absolute" aria-labelledby="dropdownMenuButton">
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
            <a href="cart.php" class="btn-primary"><img src="img/shopping-cart.png" alt="" class="nav-item px-1"></a>
            <a href="#" class="btn-primary"><img src="img/bell.png" alt="" class="nav-item px-1"></a>
          </div>
        </div>
      </nav>

      <div class="container text-center" style="margin-top: 150px;">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/carousel2.jpg" alt="Image 1">
              <div class="carousel-caption">
              </div>
            </div>
        
            <div class="carousel-item">
              <img src="img/carousel2.jpg" alt="Image 2">
              <div class="carousel-caption">
              </div>
            </div>
        
            <div class="carousel-item">
              <img src="img/carousel1.jpg" alt="Image 3">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
        
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
      <div class="container">
      <div class="row justify-content-center">
       <?php
       getproducts();
       getcat();
       ?>
      </div>
      </div>
      <br/>
      <footer class="footer mt-auto py-3 position-relative mb-auto" style="border: 1px solid #ddd;">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <span class="text-muted">
                <br />
                <a href="AboutUs.html" class="text-muted" style="text-decoration: none;">Tentang Kami</a>
                <br />
                <a href="#" class="text-muted" style="text-decoration: none;">Hubungi Kami</a>
                <br />
                <a href="#" class="text-muted" style="text-decoration: none;">Kebijakan Pribadi</a>
                <br />
                <a href="#" class="text-muted" style="text-decoration: none;">Keamanan & Privasi</a>
              </span>
            </div>
            <div class="col-6">
              <span>Ikuti Kami:
              <br />
              <a href="#" class="d-flex align-items-center mt-3" style="text-decoration: none;">
                <img src="img/instagram.png" alt="" class="me-3">
                <span class="text-muted">@Sugab_Store</span>
              </a>
              <a href="#" class="d-flex align-items-center mt-3" style="text-decoration: none;">
                <img src="img/twitter.png" alt="" class="me-3">
                <span class="text-muted">@Sugab_Store</span>
              </a>
              <br />
              </span>
              <span class="bottom-0 end me-3 text-muted">Copyright © Sugab Store</span>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

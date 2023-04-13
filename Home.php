<?php
include('admin/db_connection.php')
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
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item px-1">
                <a class="nav-link active" aria-current="page" href="Catalog.html">Product</a>
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
                    <li><a class="dropdown-item" href="#">My Account</a></li>
                    <li><a class="dropdown-item" href="#">Order History</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
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
                $select_category="Select * from `category`";
                $result_category=mysqli_query($con,$select_category);
                while($row_data=mysqli_fetch_assoc($result_category)){
                  $cat_name=$row_data['cat_name'];
                  $cat_id=$row_data['cat_id'];
                  echo " <li class='nav-item'>
                  <a href='home.php?category=$cat_id' class='nav-link text-dark'>$cat_name</a>
                  </li>";
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="d-flex justify-content-center flex-grow-1">
            <form class="d-flex" role="search">
              <input class="form-control me-3 col-8" type="search" placeholder="Search SugabStore" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
          <div class="d-flex justify-content-end gap-3 mx-3">
            <a href="#" class="btn-primary"><img src="img/shopping-cart.png" alt="" class="nav-item px-1"></a>
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
      <div class="container text-center mt-3">
        <button class="btn d-inline-block btn-rounded mx-1" id="button1" onclick="showCardGroup('card-group-1', 'button1')" style="background-color: lightgrey;">For You</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button2" onclick="showCardGroup('card-group-2', 'button2')" style="background-color: lightgrey;">Elektronik</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button3" onclick="showCardGroup('card-group-1', 'button3')" style="background-color: lightgrey;">Fashion</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button4" onclick="showCardGroup('card-group-2', 'button4')" style="background-color: lightgrey;">For You</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button5" onclick="showCardGroup('card-group-1', 'button5')" style="background-color: lightgrey;">For You</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button6" onclick="showCardGroup('card-group-2', 'button6')" style="background-color: lightgrey;">For You</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button7" onclick="showCardGroup('card-group-1', 'button7')" style="background-color: lightgrey;">For You</button>
        <button class="btn d-inline-block btn-rounded mx-1" id="button8" onclick="showCardGroup('card-group-2', 'button8')" style="background-color: lightgrey;">For You</button>
      </div>
      <div class="card-group" id="card-group-1">
        <div class="d-flex gap-3">
          <div class="row">
              <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
                <a href="productDesc.html"><img src="img/kulkas.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="productDesc.html" class="text-decoration-none">
                    <h5 class="card-title text-truncate text-black">KULKAS SIDE BY SIDE 3 PINTU 700L SAMSUNG RS63R5561B4 SPACE MAX</h5>
                  </a>
                  <p class="card-text mb-1 text-truncate"></p>
                  <p class="card-text mb-1 fw-bolder text-truncate">Rp. 13.389.000</p>
                  <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                   -->
                  <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                  <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
                </div>
              </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/switch.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Nintendo Switch OLED CFW Full Game - Sandisk128, PUTIH</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 6.249.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">60+</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/laptop.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">LAPTOP ACER SWIFT 3 SF314 RYZEN 3 5300 8GB 256SSD 14.0FHD IPS</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 6.799.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">10</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/game.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Nintendo Switch The Legend of Zelda: Breath of The Wild (Asia)</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 618.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">750+</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/bola.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Bola Basket Molten B6G2010 (Rubber)(Outdoor) FIBA APPROVED (2019-2023)
                  </h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 350.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">700+</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/tatum.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Baju Jersey Basket Swingman NBA Jayson Tatum Boston Celtics City 22/23 - S</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 198.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">26</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/pokemon.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Pokemon Violet Nintendo Switch</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 615.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Barat</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">100+</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/kaos.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Kaos UNIQLO SPY X FAMILY</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 59.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Kab. Bandung</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">17</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/hnm.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Kaos Polos H&M Pria Lengan Pendek</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 49.900</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Kab. Bandung</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">100+</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="productDesc.html"><img src="img/topi.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="productDesc.html" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Topi New Era NBA Boston Celtics All Stars Game 920 Cap</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 699.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Barat</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">1</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-group d-none" id="card-group-2">
        <div class="d-flex gap-3">
          <div class="row">
              <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
                <a href="#"><img src="img/sugab.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="#" class="text-decoration-none">
                    <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                  </a>
                  <p class="card-text mb-1 text-truncate"></p>
                  <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                  <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                   -->
                  <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                  <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
                </div>
              </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/elvio.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-group d-none" id="card-group-3">
        <div class="d-flex gap-3">
          <div class="row">
              <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
                <a href="#"><img src="img/sugab.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="#" class="text-decoration-none">
                    <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                  </a>
                  <p class="card-text mb-1 text-truncate"></p>
                  <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                  <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                   -->
                  <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                  <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
                </div>
              </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
            <div class="card mt-3 mx-3" style="width: 17rem; height: 26rem;">
              <a href="#"><img src="img/stik.jpeg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <a href="#" class="text-decoration-none">
                  <h5 class="card-title text-truncate text-black">Gamepad Joystick Wireless 2.4ghz untuk TV box</h5>
                </a>
                <p class="card-text mb-1 text-truncate"></p>
                <p class="card-text mb-1 fw-bolder text-truncate">Rp. 99.000</p>
                <!-- <p class="card-text mb-1 text-truncate"><span class="card-text mb-1 mx-1 bg-ffdbe2 text-fa7f6b text-truncate" style="background-color: #ffdbe2; color:#fa7f6b;">5%</span><s>RP.105.000</s></p>
                 -->
                <p class="card-text mb-1 text-truncate mt-3">Jakarta Utara</p>
                <p class="card-text mb-1 text-truncate">Sold <span class="card-text mb-1 fw-bolder">5</span></p>
              </div>
            </div>
          </div>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body style="overflow-x: hidden;">
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #75db8f;">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="../Home.php" style="font-variant: small-caps;">Sugab Store</a>
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
                    <img src="../img/cuki.png" alt="Dropdown Image">
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                  </ul>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    <!--Second Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="text-center">
            <h2 class="text-center p-2"> Manage Details</h2>
        </div>
    </nav>
    <!--Third navbar-->
    <div class="row">
        <div class="col-md-12 p-1 bg-body-secondary">
            <div class="button text-center">
                <button><a href="" class="nav-link text-dark bg-light my-1">View Products</a></button>
                <button><a href="index.php?addProduct" class="nav-link text-dark bg-light my-1">Add Products</a></button>
                <button><a href="" class="nav-link text-dark bg-light my-1">View Categories</a></button>
                <button><a href="index.php?addcategory" class="nav-link text-dark bg-light my-1">Add Categories</a></button>
                <button><a href="" class="nav-link text-dark bg-light my-1">All orders</a></button>
                <button><a href="" class="nav-link text-dark bg-light my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-dark bg-light my-1">List Users</a></button>
                <button><a href="" class="nav-link text-dark bg-light my-1">Log Out</a></button>
            </div>
        </div>

    <!-- form -->
    <div class="container my-5">
        <?php
        if((isset($_GET['addcategory']))){
                include('addcategory.php');
        }
        if((isset($_GET['addProduct']))){
            include('addProduct.php');
    }
        ?>
    </div>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
include('../Admin/db_connection.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <title>Profile Account</title>
</head>
<body class="overflow" style="background-color: #ecfef3;">
  <nav class="navbar navbar-expand-lg" style="background-color: #75db8f;">
    <div class="container-fluid just">
        <img src="../img/logo.png" style="width: 52px; height: 52px;" alt="Dropdown Image">
        <a class="navbar-brand fw-bolder " href="../Home.php" style="font-variant: small-caps; font-size: 150%;">Sugab Store</a>
          <a class="navbar-brand fw-bolder ms-auto" style="font-variant: small-caps; font-size: 150%;">Login Akun</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
    </div>
  </nav>
  <link rel="stylesheet" type="text/css" href="../home.css">
  <section class="vh-10 bg-image">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4" style="background-color: #a8fec9;">
            <div class="row g-0">
              <div class="justify-content-sm-center col-xl-6 d-none d-xl-block d-flex">
                <img src="" alt="">
              </div>

        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5" style="background-color: #75db8f; border: 1px solid;">
            <h2 class="text-uppercase text-center mb-4">Login</h2>
            <div class="d-flex justify-content-center">
              <p>Sudah punya akun sugab? Masuk</p>
            </div>
            </div>
            <div class="card-body p-5">

              <form>
                <!-- Email Field -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="user_email">Email</label>
                  <input type="email" id="user_email" class="form-control form-control-lg" placeholder="Masukkan Email Pengguna"
                  autocomplete="off" required="required" name="user_email" />
                </div>
                <!-- Password -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="user_password">Password</label>
                    <input type="password " id="user_password" class="form-control form-control-lg" placeholder="Masukkan Password"
                    autocomplete="off" required="required" name="user_password" />
                  </div>
                  
                <div class="d-flex justify-content-between mb-5">
                  <label class="form-check-label">
                    <a href="#!" class="text-body">lupa password?</a>
                  </label>
                  <label class="form-check-label ml-auto">
                    <a href="#!" class="text-body">Login dengan Nomor.hp</a>
                  </label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="button"class="btn btn-success btn-md mt-3 w-50 -right">Login</button>
                </div>
                <a class="d-flex justify-content-center">
                  <button type="button"class="btn-md col-3 mb-5 mx-2 mt-4 w-50-right" style="background-color: #f9f9f9;">
                    <img src="../img/facebook.png" alt="" style="width: 24px;">Facebook</button>
                    <button type="button"class="btn-md col-3 mb-5 mx-2 mt-4 w-50-right" style="background-color: #f9f9f9;">
                      <img src="../img/google.png" alt="" style="width: 18px;" class="me-3">Google</button>
                </a>
                <p class="text-center text-muted mt-5 mb-0">Belum punya akun? <a href="signup.php"
                    class="fw-bold text-body"><u>daftar!</u></a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer mt-auto py-3 position-relative mb-auto" style="border: 1px solid #ddd; background-color: rgb(233, 255, 239);">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <span class="text-muted">
          <br />
          <a href="../AboutUs.html" class="text-muted" style="text-decoration: none;">Tentang Kami</a>
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
          <img src="../img/instagram.png" alt="" class="me-3">
          <span class="text-muted">@Sugab_Store</span>
        </a>
        <a href="#" class="d-flex align-items-center mt-3" style="text-decoration: none;">
          <img src="../img/twitter.png" alt="" class="me-3">
          <span class="text-muted">@Sugab_Store</span>
        </a>
        <br />
        </span>
        <span class="bottom-0 end me-3 text-muted">Copyright © Sugab Store</span>
      </div>
    </div>
  </div>
</footer>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
<?php
include('../Admin/db_connection.php');
include('../functions/common_functions.php');

if(isset($_POST['user_register'])){
  $username = $_POST['username'];
  $user_email = $_POST['user_email'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $user_mobile = $_POST['user_mobile'];
  $user_password = $_POST['user_password'];
  $hash_password =password_hash($user_password,PASSWORD_DEFAULT);
  $conf_user_password = $_POST['conf_user_password'];
  $user_address = $_POST['user_address'];

  //accessing image
  $user_image = $_FILES['user_img']['name'];
  $temp_image = $_FILES['user_img']['tmp_name'];


    //Check available username

    $select_query="Select * from `user` where username='$username' or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
      echo "<script> alert('Username already exists')</script>";
    }elseif($user_password!=$conf_user_password){
      echo "<script>alert('Passwords do not match')</script>";
    }
    else{
    //insert query
    move_uploaded_file($temp_image, "./user_images/$user_image");
    $add_user = "INSERT INTO `user` (username, user_email, user_img, first_name, last_name, user_mobile, user_password, user_address) VALUES ('$username','$user_email','$user_image','$first_name','$last_name','$user_mobile','$hash_password','$user_address')";
    $result_query = mysqli_query($con, $add_user);
    if($result_query){
      echo "<script>alert('You have successfully registered!')</script>";
    }else{
      echo "<script>alert('Failed to register. Please try again!')</script>";
    }
    }


  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Account</title>
</head>
<body class="overflow" style="background-color: #ecfef3;">
    <nav class="navbar navbar-expand-lg" style="background-color: #75db8f;">
        <div class="container-fluid just">
            <img src="../img/logo.png" style="width: 52px; height: 52px;" alt="Dropdown Image">
          <a class="navbar-brand fw-bolder " href="../Home.php" style="font-variant: small-caps; font-size: 150%;">Sugab Store</a>
          <a class="navbar-brand fw-bolder ms-auto" style="font-variant: small-caps; font-size: 150%;">Daftar akun</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
  <link rel="stylesheet" type="text/css" href="../home.css">
  <section class="bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3 py-5 h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Daftar Akun</h2>

              <form action="" method="post" enctype="multipart/form-data">


                <!-- User Field -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control form-control-lg" placeholder="Masukkan Username Pengguna"
                    autocomplete="off" required="required" name="username" />
                  </div>

                <!-- Email Field -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="user_email">Email</label>
                  <input type="email" id="user_email" class="form-control form-control-lg" placeholder="Masukkan Email Pengguna"
                  autocomplete="off" required="required" name="user_email" />
                </div>

                <!-- Img Field -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="user_img">Foto</label>
                    <input type="file" id="user_img" class="form-control form-control-lg" placeholder="Masukkan Foto Pengguna"
                    autocomplete="off" required="required" name="user_img"/> 
                  </div>

                <!-- Name pertama field -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="first_name">Nama Pertama</label>
                  <input type="text" id="first_name" class="form-control form-control-lg" placeholder="Masukkan Nama Pertama"
                  autocomplete="off" required="required" name="first_name" />
                </div>

                <!-- Nama terakhir field -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="last_name">Nama Terakhir</label>
                  <input type="text" id="last_name" class="form-control form-control-lg" placeholder="Masukkan Nama Terakhir"
                  autocomplete="off" required="required" name="last_name" />
                </div>
                
                
                <!-- mobile Field -->
                <div class="form-outline mb-4">
                <label class="form-label" for="user_mobile">No.handphone</label>
                  <input type="text" id="user_mobile" class="form-control form-control-lg" placeholder="Masukkan No.Handphone"
                  autocomplete="off" required="required" name="user_mobile" />
                </div>

                <!-- Password -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="user_password">Password</label>
                    <input type="password" id="user_password" class="form-control form-control-lg" placeholder="Masukkan Password"
                    autocomplete="off" required="required" name="user_password" />
                  </div>

                  <!-- password confirmation Field -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="conf_user_password">Konfirmasi Password</label>
                    <input type="password" id="conf_user_password" class="form-control form-control-lg" placeholder="Masukkan Password Lagi"
                    autocomplete="off" required="required" name="conf_user_password" />
                  </div>

                  <!-- address field -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="user_address">Alamat Tinggal</label>
                    <input type="text  " id="user_address" class="form-control form-control-lg" placeholder="Masukkan Alamat Tinggal"
                    autocomplete="off" required="required" name="user_address" />
                  </div>  


                  <div class="row align-items-center justify-content-center">
                    <div class="col border-bottom"></div>
                    <div class="col-4 text-center">ATAU</div>
                    <div class="col border-bottom"></div>
                  </div>

                <a class="d-flex justify-content-center">
                    <button type="button"class="btn-md col-3 mb-5 mx-2 mt-4 w-50-right" style="background-color: #f9f9f9;">
                      <img src="../img/facebook.png" alt="" style="width: 24px;">Facebook</button>
                      <button type="button"class="btn-md col-3 mb-5 mx-2 mt-4 w-50-right" style="background-color: #f9f9f9;">
                        <img src="../img/google.png" alt="" style="width: 18px;" class="me-3">Google</button>
                  </a>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center"> 
                  <input type="submit" value="Register" class="btn btn-success btn-md mt-3 w-50 -right" name="user_register">
                  </div>

                <p class="text-center text-muted mt-5 mb-0">Sudah Punya Akun Sugab? <a href="login.php"
                    class="fw-bold text-body"><u>Login disini!</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer mt-auto py-3 mb-auto" style="border: 1px solid #ddd; background-color: rgb(233, 255, 239);">
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
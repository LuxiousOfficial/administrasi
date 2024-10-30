<?php

require 'functions.php';

    if(isset($_POST["register"])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('anda telah berhasil mendaftar');
            </script>";
            header("Location: login.php");
            exit;
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PT. Astra Honda Motor || Register</title>
    <style>

      .form-registrasi {
        height: 98.8vh;
      }

      .divider:after, .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .h-custom {
        height: calc(100% - 73px);
      }
      @media (max-width: 450px) {
        html {
          font-size: 80%;
        }
        .h-custom {
          height: 100%;
        }
        
      .form-registrasi {
        height: 84vh;
      }

      }
    </style>
  </head>
  <body>

    <section class="form-registrasi">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="img/logo honda.svg" class="img-fluid" alt="Sample image" style="width: 28rem;">
          </div>

          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="" method="post">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <h2 class="text-capitalize text-danger mb-3">PT. astra honda motor</h2>
              </div>
    
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Ketik alamat email anda..." />
              </div>
              <!-- End Email input -->
              
              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Ketik password anda..." />
              </div>
              <!-- End Password input -->
    
              <!-- Konfirmasi Password -->
              <div data-mdb-input-init class="form-outline mb-3">
                <label class="form-label" for="password2">Konfirmasi Password</label>
                <input type="password" id="password2" name="password2" class="form-control form-control-lg" placeholder="Ketik Ulang password anda..." />
              </div>
              <!-- Konfirmasi Password -->
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button  type="submit" name="register" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Daftar</button>
                <p class="small fw-bold mt-2 pt-1 mb-0 text-capitalize">sudah punya akun? <a href="login.php" class="link-danger">login sekarang</a></p>
              </div>
    
            </form>
          </div>
        </div>
      </div>
      <div
        class="text-center justify-content-center py-2 px-2 px-xl-5 bg-danger">
        <!-- Copyright -->
        <div class="text-white text-capitalize fw-bold fs-6">
         <p> &copy; Copyright 2024 PT. astra honda motor All rights reserved <br> by rommy ardiansyah</p>
        </div>
        <!-- Copyright -->
      </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
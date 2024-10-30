<?php
session_start();
require 'functions.php';

// Jika cookie sudah di ceklis dan cookienya masih ada maka user dapat login langsung ke halaman index selama waktu yang telah ditentukan
// Cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan idnya
    $result = mysqli_query($conn, "SELECT email FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Cek cookie dan username apakah benar-benar sama
    if($key === hash('sha256', $row['email'])) {
        // Jika sama maka
        $_SESSION['login'] = true;
    }
}

// jika user berhasil login maka akan tetap berada pada halaman index
if(isset($_SESSION["login"])) {
    header("Location: lowongan.php");
    exit;
}

    if(isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        // Jika usernamenya ada di dalam database
        if(mysqli_num_rows($result) === 1 ) {

            $row = mysqli_fetch_assoc($result);
            // cek passwordnya sudah sesuai atau belum dengan yang ada di database
            if(password_verify($password, $row["password"])) {
            
              // Set Session
              $_SESSION["login"] = true;

              // Cek jika rememberme sudah ditekan
              if(isset($_POST['remember'])) {
                  // Buat cookie
                  setcookie('id', $row['id'], time()+60);
                  setcookie('key', hash('sha256', $row['email']), time()+60);
              }
                header("Location: lowongan.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PT. Astra Honda Motor || Login</title>
    <style>

      .form-login {
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
        
      .form-login {
        height: 84vh;
      }

      }
    </style>
  </head>
  <body>

    <section class="form-login">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-5 col-lg-6 col-md-9 col-10">
            <img src="img/logo honda.svg" class="img-fluid" alt="Sample image" style="width: 28rem;">
          </div>

          <div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-1">
            <?php if(isset($error)) : ?>
              <p style="color: red;">Email / Password yang anda masukkan salah</p>
            <?php endif; ?>
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
    
              <!-- Checkbox -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check mb-0">
                  <label class="form-check-label" for="remember">Remember me</label>
                  <input class="form-check-input me-2" type="checkbox" value="" id="remember" name="remember"/>
                </div>
              </div>
              <!-- End Checkbox -->
    
              <div class="text-center text-lg-start mt-4 pt-2">
                <button  type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0 text-capitalize">belum punya akun? <a href="register.php" class="link-danger">daftar sekarang</a></p>
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
<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    if(isset($_POST["submit"])) {

        // untuk mengecek ada perubahan terhadap data yang telah diinputkan
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data anda telah terkirim ke dalam sistem kami');
                    document.location.href = 'lowongan.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data anda gagal terkirim');
                    document.location.href = 'lowongan.php';
                </script>
            ";
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
    <title>PT. Astra Honda Motor || Lowongan Pekerjaan</title>
    <style>
      .lowongan h1 {
        margin-top: 6rem;
      }
      @media(max-width: 450px) {
        html {
          font-size: 73%;
        }
      }
    </style>
  </head>
  <body>

     <!-- Navigasi -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-danger fs-6 navigasi fixed-top">
        <div class="container">
          <a class="navbar-brand bg-light p-2 rounded" href="#">
            <img src="img/logo ahm.svg" style="width: 4.5rem;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto text-capitalize" style="font-weight: bold;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://rommyardiansyah.com/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  product
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item border-bottom" href="https://rommyardiansyah.com/matic">matic</a></li>
                  <li><a class="dropdown-item border-bottom" href="https://rommyardiansyah.com/sport">sport</a></li>
                  <li><a class="dropdown-item border-bottom" href="https://rommyardiansyah.com/cub">cub</a></li>
                  <li><a class="dropdown-item" href="https://rommyardiansyah.com/ev">ev</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://rommyardiansyah.com/promo">promo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://rommyardiansyah.com/dealer">dealer</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  after sales
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item border-bottom" href="#">service</a></li>
                  <li><a class="dropdown-item border-bottom" href="#">honda genuine parts</a></li>
                  <li><a class="dropdown-item border-bottom" href="#">ban HGP</a></li>
                  <li><a class="dropdown-item border-bottom" href="#">AHM OIL</a></li>
                  <li><a class="dropdown-item border-bottom" href="#">honda genuine accessories</a></li>
                  <li><a class="dropdown-item" href="#">honda apparel</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  corporate
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item border-bottom" href="https://rommyardiansyah.com/corporate">about us</a></li>
                  <li><a class="dropdown-item border-bottom" href="https://www.astra-honda.com/corporate-social-responsibility">sustainability</a></li>
                  <li><a class="dropdown-item" href="https://rommyardiansyah.com/karir">karir</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
            </ul>
          </div>
        </div>
     </nav>
      <!-- End Navigasi -->
    
     <section class="lowongan">
        <div class="container">
            <h1 class="text-center text-capitalize">fullstack web developer</h1>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                   <form action="" method="post" enctype="multipart/form-data">
                    <!-- Input Nik -->
                    <div data-mdb-input-init class="form-outline mt-5 mb-4">
                        <label class="form-label" for="nik">Nik</label>
                        <input type="text" id="nik" name="nik" class="form-control form-control-lg" placeholder="Ketik nik anda..." />
                    </div>
                    <!-- End Input Nik -->

                    <!-- Input Nama -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control form-control-lg" placeholder="Ketik nama lengkap anda..." />
                    </div>
                    <!-- End Input Nama -->


                    <!-- Input Tempat Lahir -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                        <input type="text" id="tempatlahir" name="tempatlahir" class="form-control form-control-lg" placeholder="Ketik tempat lahir anda..." />
                    </div>
                    <!-- End Tempat Lahir -->

                    <!-- Input Tanggal Lahir -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                        <input type="text" id="tanggallahir" name="tanggallahir" class="form-control form-control-lg" placeholder="Ketik tanggal lahir anda..." />
                    </div>
                    <!-- End Tanggal Lahir -->

                    <!-- Input Jenis Kelamin -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
                          <option selected>Pilih</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    <!-- End Input Jenis Kelamin -->

                    <!-- Input Alamat -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control form-control-lg" placeholder="Ketik alamat anda..." />
                    </div>
                    <!-- End Input Alamat -->

                    <!-- Input Email -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Ketik alamat email anda..." />
                    </div>
                    <!-- End Email -->

                    <!-- Input Agama -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="agama">Agama</label>
                        <select class="form-select" aria-label="Default select example" id="agama" name="agama">
                          <option selected>Pilih</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Protestan">Protestan</option>
                        </select>
                      </div>
                    <!-- End Email -->

                    <!-- Input Nohp -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="nohp">No Handphone</label>
                        <input type="text" id="nohp" name="nohp" class="form-control form-control-lg" placeholder="Ketik no handphone anda..." />
                    </div>
                    <!-- End Nohp -->

                    <!-- Pas Foto -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode Pas Photo</label>
                        <input class="form-control" type="file" id="formFile" name="pasphoto">
                    </div>
                    <!-- End Pas Foto -->

                    <!-- cv -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode CV</label>
                        <input class="form-control" type="file" id="formFile" name="cv">
                    </div>
                    <!-- End cv -->

                    <!-- ijazah -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode ijazah</label>
                        <input class="form-control" type="file" id="formFile" name="ijazah">
                    </div>
                    <!-- End ijazah -->

                    <!-- transkrip nilai -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode transkrip nilai</label>
                        <input class="form-control" type="file" id="formFile" name="transkrip">
                    </div>
                    <!-- End transkrip nilai -->

                    <!-- Ktp -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode Ktp</label>
                        <input class="form-control" type="file" id="formFile" name="ktp">
                    </div>
                    <!-- End ktp -->

                    <!-- Kk -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode Kartu Keluarga</label>
                        <input class="form-control" type="file" id="formFile" name="kk">
                    </div>
                    <!-- End kk -->

                    <!-- Skck -->
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode SKCK</label>
                        <input class="form-control" type="file" id="formFile" name="skck">
                    </div>
                    <!-- End Skck -->

                    <!-- Button Kirim -->
                    <div class="text-center text-lg-start mt-4 pt-2">
                      <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">kirim</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
     </section>

      <!-- Footer -->
      <footer class="mt-5 bg-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col mt-4">
              <img src="img/logo honda.svg" alt="" style="width: 20rem;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">corporate</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/corporate">profile</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/corporate">visi misi</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/corporate">one heart</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/corporate">sejarah</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/corporate">main dealer</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">social responsibility</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">penghargaan</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/karir">karir</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">product update</a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">global honda</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="https://global.honda/en/?utm_source=ahj&utm_medium=web&utm_campaign=footer">global honda</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://global.honda/en/brand/?utm_source=ahj&utm_medium=web&utm_campaign=footer">global brand slogan</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://global.honda/en/about/history.html?utm_source=ahj&utm_medium=web&utm_campaign=footer">honda history</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://global.honda/en/about/philosophy/?utm_source=ahj&utm_medium=web&utm_campaign=footer">honda philosophy</a> <br>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">product</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/matic">honda matic</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/cub">honda bebek</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/sport">honda sport</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://www.astra-honda.com/hondabigbike/">honda big bike</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://www.astra-honda.com/hondasmarttechnology/">honda technology</a> <br>
                <a class="text-decoration-none text-light fs-6" href="https://www.astra-honda.com/product/price-list">price list</a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">after sales</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="#">service</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">honda guneine</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">honda tire</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">AHM OIL</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">honda accessories</a> <br>
                <a class="text-decoration-none text-light fs-6" href="#">honda apparel</a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">press release</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="https://rommyardiansyah.com/pressrelease">press release</a> <br>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-4 mt-5 text-light text-capitalize">
              <h4 class="fs-4">contact us</h4>
              <div class="link">
                <a class="text-decoration-none text-light fs-6" href="#">help center</a> <br>
              </div>
            </div>
          </div>
          <div class="row mt-5 text-center text-capitalize">
            <div class="col bg-danger p-3 credit">
              <h4 class="text-center text-capitalize text-light fs-5">&copy; copyright 2024 PT. astra honda motor all rights reserved <br>by rommy ardiansyah</h4>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer  -->  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
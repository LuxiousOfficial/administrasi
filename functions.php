<?php
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "astra");

    // Query ke Database
    // $conn diatas harus di acuh menggunakan sintak global karena berada di dalam function
    function query($query) {

        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }


    // Menambahkan data kedalam database
    function tambah($data) {

        global $conn;
        $nik = htmlspecialchars($data["nik"]);
        $nama = htmlspecialchars($data["nama"]);
        $tempatlahir = htmlspecialchars($data["tempatlahir"]);
        $tanggallahir = htmlspecialchars($data["tanggallahir"]);
        $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $email = htmlspecialchars($data["email"]);
        $agama = htmlspecialchars($data["agama"]);
        $nohp = htmlspecialchars($data["nohp"]);
        
        $pasphoto = uploadpasphoto();
        if(!$pasphoto) {
            return false;
        }
        $ktp = uploadktp();
        if(!$ktp) {
            return false;
        }
        $cv = uploadcv();
        if(!$cv) {
            return false;
        }
        $ijazah = uploadijazah();
        if(!$ijazah) {
            return false;
        }
        $transkrip = uploadtranskrip();
        if(!$transkrip) {
            return false;
        }
        $kk = uploadkk();
        if(!$kk) {
            return false;
        }
        $skck = uploadskck();
        if(!$skck) {
            return false;
        }

        $query = "INSERT INTO karyawan VALUES ('', '$nik', '$nama', '$tempatlahir', '$tanggallahir', '$jeniskelamin', '$alamat',
                                                '$email', '$agama', '$nohp', '$pasphoto', '$ktp', '$cv', '$ijazah', '$transkrip', '$kk', '$skck')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

function uploadpasphoto() {
    $namaFile = $_FILES['pasphoto']['name'];
    $ukuranFile = $_FILES['pasphoto']['size'];
    $error = $_FILES['pasphoto']['error'];
    $tmpName = $_FILES['pasphoto']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 5000000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadktp() {
   
    $namaFile = $_FILES['ktp']['name'];
    $ukuranFile = $_FILES['ktp']['size'];
    $error = $_FILES['ktp']['error'];
    $tmpName = $_FILES['ktp']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 2500000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadcv() {
   
    $namaFile = $_FILES['cv']['name'];
    $ukuranFile = $_FILES['cv']['size'];
    $error = $_FILES['cv']['error'];
    $tmpName = $_FILES['cv']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 5000000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadijazah() {
   
    $namaFile = $_FILES['ijazah']['name'];
    $ukuranFile = $_FILES['ijazah']['size'];
    $error = $_FILES['ijazah']['error'];
    $tmpName = $_FILES['ijazah']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 2500000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadtranskrip() {
   
    $namaFile = $_FILES['transkrip']['name'];
    $ukuranFile = $_FILES['transkrip']['size'];
    $error = $_FILES['transkrip']['error'];
    $tmpName = $_FILES['transkrip']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 2500000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadkk() {
   
    $namaFile = $_FILES['kk']['name'];
    $ukuranFile = $_FILES['kk']['size'];
    $error = $_FILES['kk']['error'];
    $tmpName = $_FILES['kk']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 2500000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function uploadskck() {
   
    $namaFile = $_FILES['skck']['name'];
    $ukuranFile = $_FILES['skck']['size'];
    $error = $_FILES['skck']['error'];
    $tmpName = $_FILES['skck']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('Silahkan upload file terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiFileValid = ['jpg', 'jpeg', 'png', 'pdf'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if(!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
            alert('File yang anda upload tidak sesuai');
        </script>";
        return false;
    }

    if($ukuranFile > 2500000) {
        echo "<script>
                alert('File yang anda upload terlalu besar');
            </script>";
    return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, 'file/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id) {
    
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {

        global $conn;
        $id = ($data["id"]);
        $nik = htmlspecialchars($data["nik"]);
        $nama = htmlspecialchars($data["nama"]);
        $tempatlahir = htmlspecialchars($data["tempatlahir"]);
        $tanggallahir = htmlspecialchars($data["tanggallahir"]);
        $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $email = htmlspecialchars($data["email"]);
        $agama = htmlspecialchars($data["agama"]);
        $nohp = htmlspecialchars($data["nohp"]);
        $pasphotoLama = htmlspecialchars($data["pasphotolama"]);
        $ktpLama = htmlspecialchars($data["ktplama"]);
        $cvLama = htmlspecialchars($data["cvlama"]);
        $ijazahLama = htmlspecialchars($data["ijazahlama"]);
        $transkripLama = htmlspecialchars($data["transkriplama"]);
        $kkLama = htmlspecialchars($data["kklama"]);
        $skckLama = htmlspecialchars($data["skcklama"]);

        if($_FILES['file']['error'] === 4) {
            $pasphoto = $pasphotoLama;
            $ktp = $ktpLama;
            $cv = $cvLama;
            $ijazah = $ijazahLama;
            $transkrip = $transkripLama;
            $kk = $kkLama;
            $skck = $skckLama;
        } else {
            $pasphoto = uploadpasphoto();
            $ktp = uploadktp();
            $cv = uploadcv();
            $ijazah = uploadijazah();
            $transkrip = uploadtranskrip();
            $kk = uploadkk();
            $skck = uploadskck();
    
        }

        $query = "UPDATE karyawan SET nik = '$nik', nama = '$nama', tempatlahir = '$tempatlahir', tanggallahir = '$tanggallahir',
                    jeniskelamin = '$jeniskelamin', alamat = '$alamat', email = '$email', agama = '$agama', nohp = '$nohp', 
                    pasphoto = '$pasphoto', ktp = '$ktp', cv = '$cv', ijazah = '$ijazah', transkrip = '$transkrip', kk = '$kk', skck = '$skck' WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM karyawan WHERE nama LIKE '%$keyword%' 
    OR nik LIKE '%$keyword%' 
    OR email LIKE '%$keyword%'";
    return query($query);
}

function registrasi($data) {

    global $conn;
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Jika terdapat username yang sama maka data tidak ditambahkan kedalam database
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username yang anda masukkan telah digunakan');
        </script>";
        return false;
    }

    if($password !== $password2) {
        echo "
        <script>
            alert('password yang anda masukkan tidak sesuai');
        </script>
        ";
        return false;
    }

    // enkripsi password agar tidak diketahui oleh orang lain
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Menambahkan kedalam database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$password')");
    mysqli_affected_rows($conn);

}

?>
<?php

$keg = new mysqli("localhost", "root", "", "kegiatan");

//$result = $db->query("SELECT * FROM elektrik");
if(isset($_POST['proses']))
{
  //Engga ada insert buat input id, soalnya auto increment
  //Tak coba input langsung ke databasenya bisa, tanpa harus ngisi id. Apakah ngaruh?
  //Lalu apa yang menyebabkan data ini tidak tersimpan ke database? Tolong Saya.
  // Yang kiri itu nama database, yang kanan nama dari html nya
     
    $nama      = $_POST['name2'];
    $domisili  = $_POST['domisili2'];
    $nim       = $_POST['nim2'];
    $nomer_hp  = $_POST['nomerhp2'];
    $email     = $_POST['email2'];
    $foto_ktp  = upload();

    $sql = "insert into green_fuel (nama, domisili, nim, nomer_hp, email, foto_ktp) values ('$nama','$domisili','$nim','$nomer_hp','$email','$foto_ktp')";
    
    if($keg->Query($sql)){
      echo 'sip';
    }
    else{
      echo 'eror';
    };
    
}

function upload() {
  $namaFile = $_FILES["fotoktp2"]["name"];
  $ukuranFile = $_FILES["fotoktp2"]["size"];
  $error = $_FILES["fotoktp2"]["error"];
  $tmpName = $_FILES["fotoktp2"]["tmp_name"];

  if ($error == 4) {
      echo "<script>alert('Pilih gambar terlebih dahulu.');</script>";
      return false;
  }

  $ekstensiGambarValid = ["jpg", "jpeg", "png"];
  $ekstensiGambar = explode(".", $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>alert('Yang anda upload bukan gambar.');</script>";
      return false;
  }

  if ($ukuranFile > 1000000) {
      echo "<script>alert('Ukuran file terlalu besar.');</script>";
      return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}

?>


<!DOCTYPE html>
<html lang="en">
    <style>
        .estetik-button {
          background-color: #ff682d;
          color: white;
          border-radius: 4px;
          padding: 10px 20px;
          font-size: 16px;
        }
      </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo</title>
</head>
<body style="background-color: rgb(0, 255, 76);">
    <h1>Green Fuel</h1>

    <form method="post" enctype="multipart/form-data">
    <table>
        <tr>
          <td><label for="name" id="name2"> Nama </label></td>
          <td>:</td>
          <td><input type="text" id="name2" name="name2" value=""/></td>
          
        </tr>
        <tr>
          <td><label for="domisili" id="domisili2"> Domisili </label></td>
          <td>:</td>
          <td><input type="text" id="domisili2" name="domisili2" value=""/></td>
          
        </tr>
        <tr>
          <td><label for="nim" id="nim2"> Nim </label></td>
          <td>:</td>
          <td><input type="text" id="nim2" name="nim2" value=""/></td>
          
        </tr>
        <tr>
          <td><label for="nomerhp" id="nomerhp2"> Nomer HP </label></td>
          <td>:</td>
          <td><input type="text" id="nomerhp2" name="nomerhp2" value=""/></td>
          
        </tr>
        <tr>
          <td><label for="email" id="email2"> Email </label></td>
          <td>:</td>
          <td><input type="text" id="email2" name="email2" value=""/></td>
          
        </tr>
        <tr>
          <td><label for="fotoktp" id="fotoktp2"> Foto KTP </label></td>
          <td>:</td>
          <td><input type="file" id="fotoktp2" name="fotoktp2" value="Browse"/></td>
          
        </tr>

      
    </table>

    <input class = "estetik-button" type="submit" name="proses">

    </form>
    <br>

    <form action="Registrasi_Kegiatan.php">
           <input class = "estetik-button" type="submit" align = "center" name="Back"   value="Back">
    </form>
</body>
</html>
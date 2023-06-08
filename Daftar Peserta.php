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
    <title>Daftar Peserta</title>
</head>
<body style="background-color: rgb(26, 125, 238);">


        <?php

        $db = new mysqli("localhost", "root", "", "kegiatan");

        $eletktrik = $db->query("SELECT * FROM elektrik");
        $go = $db->query("SELECT * FROM go_green");
        $fuel = $db->query("SELECT * FROM green_fuel");

        ?>

    <h1>Electricty 2023</h1>
    <form action="Registrasi_Kegiatan.php">
        <input  class = "estetik-button" type="submit" align = "center" name="Back"   value="Back">
    </form>
    <div id="table Electricity">
        <table border="2" cellspacing="0" cellpadding="10">

            <tr bgcolor="White">
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Domisili</th>
                <th align="center">Nim</th>
                <th align="center">Nomer HP</th>
                <th align="center">Email</th>
                <th align="center">Foto KTP</th>
            </tr>

            <?php foreach($eletktrik as $row){ ?>
            <tr bgcolor = "white">
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["domisili"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nomer_hp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><img src="img/<?= $row["foto_ktp"]; ?>" alt="" width="100"></td>
            </tr>
            <?php } ?>
            
        </table>
    </div>

    <h1>Green Fuel</h1>
    <div id="table Fuel">
        <table border="2" cellspacing="0" cellpadding="10">

            <tr bgcolor="White">
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Domisili</th>
                <th align="center">Nim</th>
                <th align="center">Nomer HP</th>
                <th align="center">Email</th>
                <th align="center">Foto KTP</th>
            </tr>
            
            <?php foreach($fuel as $row){ ?>
            <tr bgcolor = "white">
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["domisili"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nomer_hp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><img src="img/<?= $row["foto_ktp"]; ?>" alt="" width="100"></td>
            </tr>
            <?php } ?>

        </table>
    </div>

    <h1>Go Green</h1>
    <div id="table Green">
        <table border="2" cellspacing="0" cellpadding="10">

            <tr bgcolor="White">
                <th align="center">No</th>
                <th align="center">Nama</th>
                <th align="center">Domisili</th>
                <th align="center">Nim</th>
                <th align="center">Nomer HP</th>
                <th align="center">Email</th>
                <th align="center">Foto KTP</th>
            </tr>
            
            <?php foreach($go as $row){ ?>
            <tr bgcolor = "white">
                <td><?= $row["id"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["domisili"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nomer_hp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><img src="img/<?= $row["foto_ktp"]; ?>" alt="" width="100"></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <form action="Registrasi_Kegiatan.php">
        <input  class = "estetik-button" type="submit" align = "center" name="Back"   value="Back">
    </form>
</body>
</html>
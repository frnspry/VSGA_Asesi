<?php
include "koneksi.php";


if(isset($_POST['simpan'])){

    $nama=$_POST['nama'];
    $noid=$_POST['noid'];
    $nohp=$_POST['nohp'];
    $tempat=$_POST['tempat'];
    $tanggal=$_POST['tanggal'];
    $dewasa=$_POST['dewasa'];
    $anak=$_POST['anak'];
    $harga=$_POST['harga2'];
    $total=$_POST['total2'];

    $sql = "INSERT INTO pemesanan (
		`no`,
		`nama`,
		`noid`, 
		`nohp`,
        `tempat`,
        `tanggal`,
        `dewasa`,
        `anak`,
        `harga`,
        `total`) 
	 	 VALUES (
		'',
		'$nama',
		'$noid',
        '$nohp',
        '$tempat',
		'$tanggal',
        '$dewasa',
        '$anak',
        '$harga',
        '$total')";
	$query = mysqli_query($db, $sql);



    if ($query) {
        
                
        echo '<script type ="text/JavaScript">';
        echo 'alert("Berhasil menambahkan data")';
        echo '</script>';

       
        
        echo '<div class="container">';
        echo '<div class="col-lg-8">';
        echo '<h1 class="fw-bold mb-5">Tiket Wisata Online</h1>';
        echo '<div>';

        echo '<div class="mb-3 row">';
        echo '<label for="nama" class="col-sm-3 col-form-label">Nama</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="nama">';
        echo ': '; echo $nama;
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="noid" class="col-sm-3 col-form-label">Nomor Identitas</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="noid">';
        echo ': '; echo $noid;
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="nohp" class="col-sm-3 col-form-label">Nomor HP</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="nohp">';
        echo ': '; echo $nohp;
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="tempat" class="col-sm-3 col-form-label">Tempat Wisata</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="tempat">';
        echo ': '; echo $tempat;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="mb-3 row">';
        echo '<label for="tanggal" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="tanggal">';
        echo ': '; echo $tanggal;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        echo '<div class="mb-3 row">';
        echo '<label for="dewasa" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="dewasa">';
        echo ': '; echo $dewasa; echo ' orang';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="anak" class="col-sm-3 col-form-label">Pengunjung Anak-Anak</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="anak">';
        echo ': '; echo $anak; echo ' orang';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="harga" class="col-sm-3 col-form-label">Harga Tiket</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="harga">';
        echo ': Rp.'; echo $harga;
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="mb-3 row">';
        echo '<label for="total" class="col-sm-3 col-form-label">Total Bayar</label>';
        echo '<div class="col-sm-9">';
        echo '<div id="total">';
        echo ': Rp.'; echo $total;
        echo '</div>';
        echo '</div>';
        echo '</div>';


        echo '</div>';

    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Tiket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <div class="tombol" style="padding-top: 30px;" align=center>
    <a href="index.php">
        <input class="btn btn-lg btn-primary py-2" type="button" name="hitung" value="Home">
    </a>
    </div>
  </div>

</body>
</html>
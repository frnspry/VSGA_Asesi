<!doctype html>
<html lang="en">

<head>
    <title>Form Pemesanan Tiket</title>
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

  <!-- Section: Design Block -->
  <section>
        <!-- Background image -->
        <div class="p-5 bg-image" style="
                background-image: url('img/family.jpg');
                height: 500px;
                "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                margin-top: -100px;
                background: hsla(0, 0%, 100%, 0.8);
                backdrop-filter: blur(30px);
                ">
        <div class="card-body py-5 px-md-5">


        
        <div class="container">
            <h1 align=center>Form Pemesanan Tiket</h1>
                <form name="form" action="proses-pesan.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control w-100" id="nama" name="nama">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="noid" class="col-sm-3 col-form-label">Nomor Identitas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control w-100" id="noid" name="noid" minlength="16" maxlength="16">
                        </div>
                    </div>
        
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control w-100" id="nohp" name="nohp">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tempat" class="col-sm-3 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-9">
                            <select class="form-conrol w-100" id='tempat' name="tempat" onchange="return harga()">
                                <option value="">Pilih Tempat Wisata</option>
                                <option value="Museum">Museum</option>
                                <option value="Pantai">Pantai</option>
                                <option value="Taman Nasional">Taman Nasional</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control w-100" id="tanggal" name="tanggal">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dewasa" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control w-100" id="dewasa" name="dewasa" value="0" min="0">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="anak" class="col-sm-3 col-form-label">Pengunjung Anak-Anak <br><sub>Usia dibawah 12 tahun</sub></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control w-100" id="anak" name="anak" value="0" min="0">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga Tiket</label>
                        <div class="col-sm-9">
                            <div id="harga"></div>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="total" class="col-sm-3 col-form-label">Total Bayar</label>  
                        <div class="col-sm-9">
                            <div id="total"></div>
                        </div>

                    </div>

                        <div class="col-sm-9">
                            <input type="hidden" class="form-control w-100" id="harga2" name="harga2" readonly>
                        </div>

                    
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control w-100" id="total2" name="total2" readonly>
                        </div>
        
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="cek" name="cek" required>
                        <label class="form-check-label" for="cek">
                            Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                        </label>
                    </div>

                    <div class="tombol" style="padding-top: 30px;" align=center>
                        <input class="btn btn-lg btn-primary py-2" type="button" name="hitung" value="Hitung Total Bayar" onclick="total()">
                        <input class="btn btn-lg btn-primary py-2" type="submit" value="Pesan Tiket" name="simpan">
                        <a href="index.php">
                        <input class="btn btn-lg btn-primary py-2" type="button" name="hitung" value="Cancel">
                        </a>
                    </div>           
                </form>
        </div>
        <script src="script.js"></script>
    </section>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
        }
        .biodata {
            font-size: 40px;
        }
        .warna-1 {
            color: #FF5733; /* Warna merah */
        }
        .warna-2 {
            color: #33FF57; /* Warna hijau */
        }
        .warna-3 {
            color: #5733FF; /* Warna biru */
        }
    </style>
</head>
<body>
    <?php
    // Data Biodata
    $nama = "Trisna sandy wibowo";
    $umur = 20;
    $alamat = "Jalan haji dimun raya Depok kecamatan sukmajaya, kelurahan sukmajaya";
    $pekerjaan = "Karyawan";
    ?>
    <h1>Biodata Saya</h1>
    <p class="biodata warna-1">Nama: <?php echo $nama; ?></p>
    <p class="biodata warna-2">Umur: <?php echo $umur; ?> tahun</p>
    <p class="biodata warna-3">Alamat: <?php echo $alamat; ?></p>
    <p class="biodata warna-1">Pekerjaan: <?php echo $pekerjaan; ?></p>
</body>
</html>

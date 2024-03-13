<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .label-container {
            margin-bottom: 10px;
        }

        .label-container label {
            margin-right: 100px;
            color: transparent;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Latihan 2</h1>
    <form action="" method="post">
        <div class="label-container">
            <label for="nilai1">Nilai I</label>
            <label for="nilai2">Nilai II</label>
        </div>
        <input type="number" name="nilai1" required>

        <select name="operasi" required>
            <option value="tambah">(+)</option>
            <option value="kurang">(-)</option>
            <option value="kali">(x)</option>
            <option value="bagi">(/)</option>
        </select>
        <input type="number" name="nilai2" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operasi = $_POST['operasi'];

        if ($operasi == 'tambah') {
            $hasil = $nilai1 + $nilai2;
        } elseif ($operasi == 'kurang') {
            $hasil = $nilai1 - $nilai2;
        } elseif ($operasi == 'kali') {
            $hasil = $nilai1 * $nilai2;
        } elseif ($operasi == 'bagi') {
            $hasil = ($nilai2 != 0) ? $nilai1 / $nilai2 : "Error: Pembagian dengan nol tidak diperbolehkan.";
        } else {
            $hasil = "Operasi tidak valid.";
        }
        echo "<br><b>Hasil perhitungan:</b> $hasil";
    }
    ?>

</body>

</html>

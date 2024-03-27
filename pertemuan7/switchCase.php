<?php 
    $hasil_perhitungan = isset($_POST['submit']) ? 0 : ""; // Inisialisasi variabel untuk menghindari error
    if (isset($_POST['submit'])) {
        switch ($_POST['operasi']) {
            case "+": 
                $hasil_perhitungan = $_POST['angka1'] + $_POST['angka2'];
                break;
            case "-": 
                $hasil_perhitungan = $_POST['angka1'] - $_POST['angka2'];
                break;
            case "*": 
                $hasil_perhitungan = $_POST['angka1'] * $_POST['angka2'];
                break;
            case "/": 
                $hasil_perhitungan = $_POST['angka1'] / $_POST['angka2'];
                break;
            case "%": 
                $hasil_perhitungan = $_POST['angka1'] % $_POST['angka2'];
                break;
            default: 
                $hasil_perhitungan = "Operasi Tidak Ditemukan";
                break;
        };
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Aritmatika</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 400px; /* Mengatur lebar form */
        }

        input[type="number"],
        select {
            width: calc(100% - 22px); /* Mengatur lebar input */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%; /* Mengatur lebar tombol submit */
            padding: 12px 0; /* Mengatur padding tombol */
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        section {
            margin-top: 20px;
            text-align: center;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="angka1">
        <select name="operasi" id="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="angka2">
        <input type="submit" name="submit" value="submit">
    </form>
    <section>
        <p>Hasil Dari Perhitungan Aritmatika adalah : <?= $hasil_perhitungan; ?></p>
    </section>
</body>
</html>

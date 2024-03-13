<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 2 | Latihan 1 | Output</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h2>OUTPUT DATA</h2>
    <?php
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
    $nilaitgs = isset($_POST['nilaitgs']) ? $_POST['nilaitgs'] : 0;
    $nilaiuts = isset($_POST['nilaiuts']) ? $_POST['nilaiuts'] : 0;
    $nilaiuas = isset($_POST['nilaiuas']) ? $_POST['nilaiuas'] : 0;

    $ratarata = ($nilaitgs + $nilaiuts + $nilaiuas) / 3;
    ?>
    <table>
        <tr>
            <td><p><b>Nama : </b><?php echo $nama ?></p></td>
            <td><p><b>Jurusan : </b><?php echo $jurusan ?></p></td>
        </tr>
        <tr>
            <td><p><b>Nilai Tugas : </b><?php echo $nilaitgs ?></p></td>
            <td><p><b>Nilai UTS : </b><?php echo $nilaiuts ?></p></td>
        </tr>
        <tr>
            <td><p><b>Nilai UAS : </b><?php echo $nilaiuas ?></p></td>
            <td><p><b>Rata-rata : </b><?php echo number_format($ratarata, 2) ?></p></td>
        </tr>
    </table>
</body>
</html>

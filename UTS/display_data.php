<!DOCTYPE html>
<html>
<head>
    <title>Data Piala Asia U-23 Group A</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Piala Asia U-23 Group A</h2>

    <?php
    // Baca data dari file data.txt dan tampilkan dalam tabel
    $data_file = 'data.txt';
    if (file_exists($data_file)) {
        // Buka file
        $file_handle = fopen($data_file, 'r');

        // Output tabel
        echo '<table>';
        echo '<tr><th>Negara</th><th>P</th><th>M</th><th>S</th><th>K</th><th>Poin</th></tr>';
        
        // Baca setiap baris dalam file
        while (($line = fgets($file_handle)) !== false) {
            // Pisahkan data dengan tab
            $data = explode("\t", $line);

            // Tampilkan data dalam tabel
            echo '<tr>';
            foreach ($data as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }

        // Tutup file
        fclose($file_handle);

        // Selesai menampilkan tabel
        echo '</table>';
    } else {
        echo '<p>Belum ada data yang tersedia.</p>';
    }
    ?>
</body>
</html>

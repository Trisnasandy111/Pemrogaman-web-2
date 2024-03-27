<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Matriks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            color: #555;
            margin-left: 20px; /* Menggeser ke kiri */
        }
        table {
            width: 50%; /* Mengurangi lebar tabel agar bisa muat di sebelah kiri */
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: none; /* Menghapus garis */
            padding: 8px;
            text-align: center;
        }
        .number1 {
            color: blue; /* Warna angka matriks 1 */
        }
        .number2 {
            color: red; /* Warna angka matriks 2 */
        }
        .result-number {
            color: green; /* Warna angka hasil perkalian */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perkalian Matriks</h2>
        <p>Nama: Trisna sandy wibowo</p>
        <p>NIM: 211011401128</p>
        <hr>
        <?php
        // Function untuk perkalian matriks
        function multiplyMatrices($matrix1, $matrix2)
        {
            $result = array();
            for ($i = 0; $i < count($matrix1); $i++) {
                for ($j = 0; $j < count($matrix2[0]); $j++) {
                    $result[$i][$j] = 0;
                    for ($k = 0; $k < count($matrix1[0]); $k++) {
                        $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                    }
                }
            }
            return $result;
        }

        // Matriks yang diberikan
        $matrix1 = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );

        $matrix2 = array(
            array(9, 8, 7),
            array(6, 5, 4),
            array(3, 2, 1)
        );

        // Perkalian matriks
        $resultMatrix = multiplyMatrices($matrix1, $matrix2);
        ?>
        <h3>Matriks 1</h3>
        <table>
            <?php
            foreach ($matrix1 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td class='number1'>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <h3>Matriks 2</h3>
        <table>
            <?php
            foreach ($matrix2 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td class='number2'>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="container">
        <h3>Hasil Perkalian</h3>
        <table>
            <?php
            foreach ($resultMatrix as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td class='result-number'>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

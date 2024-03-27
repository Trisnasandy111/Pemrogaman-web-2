<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan Looping dalam PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #343a40;
        }
        p {
            text-align: center;
            color: #6c757d;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #dee2e6;
            padding: 8px;
            margin-bottom: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contoh Penggunaan Looping dalam PHP</h2>
        <p>Nama : Trisna sandy wibowo</p>
        <p>Nim: 211011401128</p>
        <hr>
        <h3>Bilangan Genap yang Habis Dibagi 3</h3>
        <ul>
            <?php
            // Function untuk menampilkan bilangan genap yang habis dibagi 3 dan menghitung jumlahnya
            function displayEvenNumbersDivisibleBy3()
            {
                $count = 0;
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 2 == 0 && $i % 3 == 0) {
                        echo "<li>$i</li>";
                        $count++;
                    }
                }
                return $count;
            }

            $total_numbers = displayEvenNumbersDivisibleBy3();
            ?>
        </ul>
        <p>Total bilangan genap yang habis dibagi 3: <?php echo $total_numbers; ?></p>
    </div>
</body>
</html>
```
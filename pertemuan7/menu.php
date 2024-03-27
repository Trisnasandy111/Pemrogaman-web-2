<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Materi PHP</title>
</head>
<body>
    <h2>Pilih Materi PHP</h2>
    <form method="get">
        <label for="menu">Pilih salah satu materi untuk dipelajari:</label><br>
        <select id="menu" name="menu">
            <option value="1">Pengenalan IF Statement</option>
            <option value="2">Pengenalan SWITCH..CASE</option>
            <option value="3">Pengenalan Perulangan (Looping)</option>
            <option value="4">Pengenalan Array</option>
        </select><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        
        switch ($menu) {
            case 1:
                echo "<h3>Pengenalan IF Statement</h3>";
                // Kode untuk pengenalan IF Statement disini
                break;
            case 2:
                echo "<h3>Pengenalan SWITCH..CASE</h3>";
                // Kode untuk pengenalan SWITCH..CASE disini
                break;
            case 3:
                echo "<h3>Pengenalan Perulangan (Looping)</h3>";
                // Kode untuk pengenalan Perulangan disini
                break;
            case 4:
                echo "<h3>Pengenalan Array</h3>";
                // Kode untuk pengenalan Array disini
                break;
            default:
                echo "<p>Materi tidak ditemukan.</p>";
        }
    }
    ?>
</body>
</html>

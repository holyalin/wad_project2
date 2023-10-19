<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2 PHP Alin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 70rem;">
                    <?php
                    $judul = "Haloooo";
                    $angkaInput = $pilihanDropdown = "";

                    if (isset($_POST['submit'])) {
                        $angkaInput = $_POST['angkaInput'];
                        $pilihanDropdown = $_POST['pilihanDropdown'];
                    }
                    ?>

                    <form action="latihan3.php" method="post">
                        <h3><center>Latihan Kecil Tambah-tambahan</center></h3>
                        <label for="angkaInput">Masukkan angka pertama: </label>
                        <input type="number" id="angkaInput" name="angkaInput" min="0" step="1" value="<?php echo $angkaInput; ?>">
                        <br>
                        <label for="pilihanDropdown">Pilih angka kedua: </label>
                        <select id="pilihanDropdown" name="pilihanDropdown">
                            <option value="pilihanDropdown1">1</option>
                            <option value="pilihanDropdown2">2</option>
                            <option value="pilihanDropdown3">3</option>
                        </select>
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-danger w-100 mt-5" />
                    </form>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

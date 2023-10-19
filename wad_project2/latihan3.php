<?php
error_reporting(0);

$angkaInput = isset($_POST['angkaInput']) ? $_POST['angkaInput'] : 0;
$pilihanDropdown = isset($_POST['pilihanDropdown']) ? $_POST['pilihanDropdown'] : 'pilihanDropdown1';

$hasil = 0;

switch ($pilihanDropdown) {
    case "pilihanDropdown1":
        $hasil = $angkaInput + 1;
        break;
    case "pilihanDropdown2":
        $hasil = $angkaInput * 2;
        break;
    case "pilihanDropdown3":
        $hasil = $angkaInput * 3;
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Perhitungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 70rem;">
                    <h4><center>Hasilnyaaaaa</center></h4>
                    <h5>Hasil: <?php echo $hasil; ?></h5>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

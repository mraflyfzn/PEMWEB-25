<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Selamat Belajar Web</h3>
    <?php
        echo "<p>Skrip PHP Pertama Saya</p>";
    ?>
    <?php
        // input
        $_nama = "Rafly";
        $_umur = "20";
        $_status = "Mahasiswa";
        $_alamat = "Bekasi";
        $_prodi = "Sistem Informasi";
        $_kampus = "STT_NF";
        echo "Hello, selamat datang di PHP!";
    ?>
    <hr>
    
    <?php
        // ouput
        echo "Nama saya $_nama. Saya berumur $_umur tahun";
        echo "<br> Saya tinggal di $_alamat.";
        echo "<br> Berstatus $_status, pada $_kampus.";
    ?>
</body>
</html>
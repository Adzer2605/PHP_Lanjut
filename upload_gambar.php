<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="244311044">
    <meta name="author" content="Iqbal Abdullah">
</head>
<body>
    
form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan di upload:</label><br>
        <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
    <input type="submit" value="Upload Image" name="submit">

    <?php

    //cek apakah ada kiriman data dengan method post
    if (isset($_POST['submit'])) {
        $target_dir = 'gambar/';
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //cek apakah file berupa gambar
        $check = getimagesize($_FILES['gambar']['tmp_name']);
        if ($check !== false) {
            echo "File berupa citra/gambar - " . $check['mime'] . ".";
            $uploadOk = 1;
            //simpan ke folder gambar
        } else {
            echo "File bukan gambar";
            $uploadOk = 0;
        }
        //cek nama file sama
        if (file_exists($target_file)) {
            echo "Sorry, file already exist";
            $uploadOk = 0;
        }
        //cek ukuran file
        if ($_FILES['gambar']['size'] > 500000) {
            echo "Sorry, file terlalu besar";
            $uploadOk = 0;
        }
        //cek format file
        if ($tipeGambar != 'jpg' && $tipeGambar != 'png' && $tipeGambar != 'jpeg' && $tipeGambar != 'gif') {
            echo "Sorry, format file harus jpg, png, jpeg, dan gif";
            $uploadOk = 0;
        }

        //cek $uploadOk sesuai kriteria
        if ($uploadOk == 0) {
            echo "Gagal upload file";
        } else {
            //proses upload
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                echo "file" . htmlspecialchars(basename($_FILES['gambar']['name'])) . "berhasil upload";
            } else {
                echo "error upload";
            }
        }
    }
    ?>
</body>

</html>
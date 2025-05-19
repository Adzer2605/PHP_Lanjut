<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri</title>
</head>
<body>
    <?php 
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo "<img src='$filename' alt='gambar' width='200'> <br>" ;
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br>
        E-mail: <input type="text" name="email"><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="bersihkan">
    </form>

    <?php
        $name = $email = $comment = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $komentar = $_POST['comment'];

            echo ("Nama: " . $nama . "<br>");
            echo ("E-mail: " . $email . "<br>");
            echo ("Komentar: " . $komentar . "<br>");
            echo ("<hr>");

            function bersihkan_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        }
    ?>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>
<body>
    <?php 
        $nim = '244311044';
        $name = 'Iqbal Abdullah';
        $email = 'iqbalabdullah2605@gmail.com';

        setcookie("nim", $nim, time() + (86400 * 30), "/");
        setcookie("name", $name, time() + (86400 * 30), "/");
        setcookie("email", $email, time() + (86400 * 30), "/");

        echo "cookie telah diatur <br>";
        echo "<a href='cookie_get.php'>lihat cookie</a>";
    ?>
</body>
</html>


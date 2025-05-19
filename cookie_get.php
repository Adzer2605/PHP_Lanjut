<?php
if (isset($_COOKIE["nim"])) {
    echo "NIM: " . $_COOKIE["nim"] . "<br>";
} else {
    echo "Cookie 'nim' tidak diatur.<br>";
}

if (isset($_COOKIE["name"])) {
    echo "Nama: " . $_COOKIE["name"] . "<br>";
} else {
    echo "Cookie 'name' tidak diatur.<br>";
}

if (isset($_COOKIE["email"])) {
    echo "Email: " . $_COOKIE["email"] . "<br>";
} else {
    echo "Cookie 'email' tidak diatur.<br>";
}


echo "<br><a href='set_cookie.php'>Set Cookie</a>";
?>
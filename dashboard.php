<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: session_login.php");
    exit;
}
echo "Selamat datang, " . $_SESSION['username'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";
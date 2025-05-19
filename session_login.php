<?php
session_start();

$valid_username = "admin";
$valid_password = "admin";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            throw new Exception("Username atau password salah!");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
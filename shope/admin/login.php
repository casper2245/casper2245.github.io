<?php
session_start();

// Hardcoded admin credentials (for simplicity)
$admin_user = "admin";
$admin_pass = "mypassword"; // in real life, hash your password

$username = $_POST['username'];
$password = $_POST['password'];

if($username === $admin_user && $password === $admin_pass){
    $_SESSION['loggedin'] = true;
    header("Location: admin.php"); // redirect to protected page
    exit;
} else {
    echo "Invalid login!";
}
?>
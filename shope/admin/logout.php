<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header("Location: index.html"); // redirect if not logged in
    exit;
}
?>

<h1>Welcome Admin!</h1>
<p>This page is protected.</p>
<a href="logout.php">Log out</a>
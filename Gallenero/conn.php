<?php
// conn.php

$conn = mysqli_connect("localhost", "root", "", "gallenero");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

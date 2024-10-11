<?php
$conn = new mysqli("localhost", "root", "", "pertemuandua");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
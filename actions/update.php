<?php
include "../koneksi.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$sql = "UPDATE notes SET judul='$judul', isi='$isi' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Catatan berhasil diperbarui!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

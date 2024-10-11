<?php
include "../koneksi.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM notes WHERE id = $id");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
</head>

<body>
    <h2>Edit Catatan</h2>
    <form action="../actions/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="<?php echo
                                                            $row['judul']; ?>" required><br><br>
        <label for="isi">Isi Catatan:</label><br>
        <textarea id="isi" name="isi" rows="5" required><?php echo
                                                        $row['isi']; ?></textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
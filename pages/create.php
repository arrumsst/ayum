<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
</head>

<body>
    <h2>Tambah Catatan Baru</h2>
    <form action="../actions/store.php" method="POST">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required><br><br>
        <label for="isi">Isi Catatan:</label><br>
        <textarea id="isi" name="isi" rows="5" required></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
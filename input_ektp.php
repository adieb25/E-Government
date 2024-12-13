<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data e-KTP</title>
</head>
<body>
    <h2>Form Input Data e-KTP</h2>
    <form action="proses_ektp.php" method="post">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="nik">NIK:</label>
        <input type="text" name="nik" id="nik" maxlength="16" required><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea><br><br>

        <button type="submit">Simpan dan Unduh</button>
    </form>
</body>
</html>

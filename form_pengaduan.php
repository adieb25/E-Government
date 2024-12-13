<!-- <?php
include 'db.php'; // Menyertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_pengaduan = $_POST['judul_pengaduan'];
    $detail_pengaduan = $_POST['detail_pengaduan'];
    $nomor_tiket = $_POST['nomor_tiket'];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO Pengaduan (judul_pengaduan, detail_pengaduan, nomor_tiket)
            VALUES ('$judul_pengaduan', '$detail_pengaduan', '$nomor_tiket')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengaduan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <section class="container-section" id="pengaduan-masyarakat">
            <h2>Pengaduan Masyarakat</h2>
            <p>Kirim pengaduan Anda terkait masalah publik berikut:</p>
            <ul>
                <li>Kerusakan infrastruktur.</li>
                <li>Pelayanan publik yang tidak memuaskan.</li>
            </ul>
            <form action="form_pengaduan.php" method="POST">
                <div class="mb-3">
                    <label for="judul_pengaduan" class="form-label">Judul Pengaduan</label>
                    <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan" placeholder="Judul Pengaduan" required>
                </div>
                <div class="mb-3">
                    <label for="detail_pengaduan" class="form-label">Detail Pengaduan</label>
                    <textarea class="form-control" id="detail_pengaduan" name="detail_pengaduan" rows="3" placeholder="Detail Pengaduan" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="nomor_tiket" class="form-label">Nomor Tiket</label>
                    <input type="text" class="form-control" id="nomor_tiket" name="nomor_tiket" placeholder="Masukkan Nomor Tiket" required>
                </div>
                <button type="submit" class="btn btn-custom">Kirim Pengaduan</button>
            </form>
        </section>
    </div>
</body>
</html> -->

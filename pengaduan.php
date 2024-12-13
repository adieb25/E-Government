<?php
include 'db.php';

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $judul_pengaduan = $_POST['judul_pengaduan'];
    $detail_pengaduan = $_POST['detail_pengaduan'];
    $nomor_tiket = $_POST['nomor_tiket'];

    // Validasi input
    if (empty($judul_pengaduan) || empty($detail_pengaduan) || empty($nomor_tiket)) {
        echo "<script>alert('Semua field harus diisi!');</script>";
    } else {
        // Koneksi ke database
        $host = 'localhost'; // Ganti dengan host database Anda
        $username = 'root'; // Ganti dengan username database Anda
        $password = ''; // Ganti dengan password database Anda
        $dbname = 'e_government'; // Ganti dengan nama database Anda

        // Membuat koneksi
        $conn = new mysqli($host, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Menyiapkan query untuk memasukkan data pengaduan
        $sql = "INSERT INTO pengaduan (judul_pengaduan, detail_pengaduan, nomor_tiket) VALUES ('$judul_pengaduan', '$detail_pengaduan', '$nomor_tiket')";

        // Eksekusi query
        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman pengaduan dengan fragment #pengaduan-masyarakat setelah berhasil
            header("Location: pengaduan.php#pengaduan-masyarakat");
            exit; // Pastikan untuk menghentikan eksekusi setelah header redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Menutup koneksi
        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Government - Informasi & Layanan Publik</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('image/istana.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
        }

/* Konten kiri navbar */
.navbar-left {
            padding-top: 8px;
            padding-left: 10px;
            position: fixed;
            /* Membuat elemen berada di posisi tetap */
            top: 10px;
            /* Jarak dari atas */
            left: 10px;
            /* Jarak dari kiri */
            z-index: 1000;
            /* Agar elemen tetap terlihat di atas elemen lain */
        }

        /* Konten kanan navbar */
        .navbar-right {
            display: flex;
            align-items: center;
        }

        /* Ikon profil */
        .profile-icon {
            width: 35px;
            /* Ukuran gambar */
            height: 35px;
            /* Ukuran gambar */
            border-radius: 50%;
            /* Membuat gambar berbentuk bundar */
            border: 2px solid white;
            /* Border putih (opsional) */
            object-fit: cover;
            /* Menjaga gambar agar tidak terdistorsi dan terpotong dengan baik */

        }
    /* Navbar Styling */
    .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

    .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff !important;
    }

    .navbar-nav .nav-link {
        font-size: 1.1rem;
        color: #fff !important;
        padding-left: 20px;
        padding-right: 20px;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #ffd700 !important;
        transform: scale(1.1);
    }


        .container-section {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 40px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.5);
        }

        h2, h3 {
            color: #ffd700;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .download-link {
            text-decoration: none;
            color: #ffd700;
            transition: color 0.3s ease;
        }

        .download-link:hover {
            color: #ffcc33;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
            box-shadow: 0px -4px 15px rgba(0, 0, 0, 0.5);
        }

        .footer-link {
            color: #ffd700;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-link:hover {
            color: #ffcc33;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-left">
                    <!-- Profil Ikon -->
                    <img src="image/profile.jpg" alt="Profile" class="profile-icon" />
                </div>
            </nav>
            <a class="navbar-brand" href="index.php">E-Government</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Beranda -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>

                    <!-- Tentang Kami Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Organisasi.php" id="tentangKamiDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="tentangKamiDropdown">
                            <li><a class="dropdown-item" href="Organisasi.php#organisasi">Organisasi</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#produk-hukum">Tata Letak dan Akuntabilitas Kinerja</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#profil">Profil</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#layanan-publik">Publikasi</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#pengadaan">Pengadaan Barang dan Jasa</a></li>
                        </ul>
                    </li>

                    <!-- Produk Hukum Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="produkHukum.php" id="produkHukumDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Produk Hukum
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="produkHukumDropdown">
                            <li><a class="dropdown-item" href="produkHukum.php#produk-hukum-terbaru">Produk Hukum Terbaru</a></li>
                            <li><a class="dropdown-item" href="produkHukum.php#produk-hukum-terpopuler">Produk Hukum Terpopuler</a></li>
                            <li><a class="dropdown-item" href="produkHukum.php#matriks-produk-hukum">Matriks Produk Hukum</a></li>
                        </ul>
                    </li>

                    <!-- Berita dan Artikel Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="berita.php" id="beritaArtikelDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Berita & Artikel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="beritaArtikelDropdown">
                            <li><a class="dropdown-item" href="berita.php#kumpulan-berita">Kumpulan Berita</a></li>
                            <li><a class="dropdown-item" href="berita.php#serba-serbi">Serba-serbi Negara</a></li>
                            <li><a class="dropdown-item" href="berita.php#infografis">Infografis</a></li>
                            <li><a class="dropdown-item" href="berita.php#artikel">Artikel</a></li>
                        </ul>
                    </li>

                    <!-- Informasi dan Layanan Publik Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="pengaduan.php" id="layananPublikDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi & Layanan Publik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="layananPublikDropdown">
                            <li><a class="dropdown-item" href="pengaduan.php#pengaduan-masyarakat">Pengaduan Masyarakat</a></li>
                            <li><a class="dropdown-item" href="pengaduan.php#administrasi">Administrasi</a></li>
                            <li><a class="dropdown-item" href="pengaduan.php#keprotokolan">Keprotokolan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Konten Informasi & Layanan Publik -->
    <div class="container mt-5">
        <section class="container-section" id="pengaduan-masyarakat">
            <h2>Pengaduan Masyarakat</h2>
            <p>Kirim pengaduan Anda terkait masalah publik berikut:</p>
            <ul>
                <li>Kerusakan infrastruktur.</li>
                <li>Pelayanan publik yang tidak memuaskan.</li>
            </ul>
            <form action="pengaduan.php" method="POST">
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

<!-- administrasi -->
        <section class="container-section" id="administrasi">
            <h2>Administrasi</h2>
            <p>Unduh formulir untuk dokumen penting berikut:</p>
            <ul>
                <li><a href="#" class="download-link">e-KTP</a></li>
                <li><a href="#" class="download-link">Kartu Keluarga (KK)</a></li>
                <li><a href="#" class="download-link">Paspor</a></li>
                <li><a href="#" class="download-link">Akta Kelahiran</a></li>
            </ul>
        </section>

        <!-- keprotokolan -->
        <section class="container-section" id="keprotokolan">
            <h2>Keprotokolan</h2>
            <h3>Tata Cara Acara Kenegaraan</h3>
            <p>Ketahui tata cara resmi untuk menghadiri dan mengadakan acara kenegaraan, termasuk pidato presiden dan sidang DPR.</p>
            <h3>Jadwal Kegiatan Resmi</h3>
            <ul>
                <li>Pidato Kenegaraan Presiden - 20 Januari 2024</li>
                <li>Sidang DPR - 10 Februari 2024</li>
                <li>Upacara Kemerdekaan - 17 Agustus 2024</li>
            </ul>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>Hubungi Kami: 
        <a href="mailto:jellyfish12141@gmail.com?subject=Halo&body=Pesan%20Anda%20di%20sini" class="footer-link">Kirim Email</a>        | 
            <a href="https://wa.me/6282233311386" target="_blank" class="footer-link"> Hubungi via WhatsApp</a> | 
            <a href="https://instagram.com/reza_m_p65" target="_blank" class="footer-link"> Medsos</a>

        </p>
        <p>
            <a href="https://maps.app.goo.gl/bSMExFTVs8CssGPh7" class="footer-link">Peta Lokasi Kantor</a> | 
            <a href="#" class="footer-link">Informasi Layanan</a>
        </p>
        <p>© 2024 E-Government | <a href="#top">Kembali ke atas</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Government</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .fullscreen-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            opacity: 0;
            animation: fadeIn 1s forwards, moveUp 1.5s ease-out forwards;
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


        /* Animasi fade-in untuk tampilan section */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Animasi pergerakan naik gambar */
        @keyframes moveUp {
            to {
                transform: translateY(0);
            }

            from {
                transform: translateY(20px);
            }
        }

        /* Transparan Layer */
        .fullscreen-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Transparansi */
            z-index: 1;
        }

        .fullscreen-content {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.2);
            /* Transparan dengan efek putih */
            padding: 20px;
            border-radius: 10px;
        }

        .fullscreen-section h1 {
            font-size: 3rem;
            transition: transform 0.3s ease;
        }

        .fullscreen-section p {
            font-size: 1.2rem;
        }

        .btn-read-more {
            margin-top: 2rem;
        }

        /* Gradiasi untuk latar belakang */
        .fullscreen-section-1 {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url('image/peristiwa.jpeg');
        }

        .fullscreen-section-2 {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url('image/teknologi.webp');
        }

        .fullscreen-section-3 {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url('image/bencana.jpg');
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

    <!-- Fullscreen Berita Utama -->
    <section class="fullscreen-section fullscreen-section-1">
        <div class="fullscreen-content">
            <h1 class="text-primary">Peristiwa Heboh di Dunia Politik</h1>
            <p>Perdebatan besar di parlemen yang mengguncang dunia internasional. Apa dampaknya terhadap kebijakan negara?</p>
            <a href="#" class="btn btn-primary btn-read-more">Baca Selengkapnya</a>
        </div>
    </section>

    <!-- Subtopik Berita -->
    <section class="fullscreen-section fullscreen-section-2">
        <div class="fullscreen-content">
            <h1 class="text-warning">Teknologi Baru yang Mengubah Dunia</h1>
            <p>Negara ini meluncurkan inovasi teknologi yang menarik perhatian dunia. Siapa di balik kesuksesan ini?</p>
            <a href="#" class="btn btn-outline-warning btn-read-more">Baca Selengkapnya</a>
        </div>
    </section>

    <!-- Subtopik Berita Lainnya -->
    <section class="fullscreen-section fullscreen-section-3">
        <div class="fullscreen-content">
            <h1>Bencana Alam Menggemparkan</h1>
            <p>Tragedi yang mengguncang hati dunia. Bagaimana respons pemerintah?</p>
            <a href="#" class="btn btn-light btn-read-more">Baca Selengkapnya</a>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
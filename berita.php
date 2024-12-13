<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Artikel</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        background-image: url('image/istana.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        color: #000;
    }

    .text-box {
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;
        padding: 60px;
        border-radius: 8px;
        max-width: 800px;
        margin: 50px auto;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
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


    .section-header {
        padding: 60px;
        background-color: rgba(0, 0, 0, 0.7);
        text-align: center;
    }

    .section-header h2 {
        font-size: 2.5rem;
        color: #ffd700;
        margin-bottom: 20px;
    }

    .section {
        margin: 50px auto;
        padding: 60px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
        background-image: url('image/section-bg.jpg');
        /* Sesuaikan dengan path gambar */
        background-size: cover;
        background-blend-mode: overlay;
    }

    .card {
        background-color: #343a40;
        color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
    }

    .card-title {
        color: #ffd700;
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-left">
                    <!-- Profil Ikon -->
                    <img src="image/profile.jpg" alt="Profile" class="profile-icon"/>
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
                            <li><a class="dropdown-item" href="Organisasi.php#produk-hukum">Tata Letak dan Akuntabilitas
                                    Kinerja</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#profil">Profil</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#layanan-publik">Publikasi</a></li>
                            <li><a class="dropdown-item" href="Organisasi.php#pengadaan">Pengadaan Barang dan Jasa</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Produk Hukum Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="produkHukum.php" id="produkHukumDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk Hukum
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="produkHukumDropdown">
                            <li><a class="dropdown-item" href="produkHukum.php#produk-hukum-terbaru">Produk Hukum
                                    Terbaru</a></li>
                            <li><a class="dropdown-item" href="produkHukum.php#produk-hukum-terpopuler">Produk Hukum
                                    Terpopuler</a></li>
                            <li><a class="dropdown-item" href="produkHukum.php#matriks-produk-hukum">Matriks Produk
                                    Hukum</a></li>
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
                        <a class="nav-link dropdown-toggle" href="pengaduan.php" id="layananPublikDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi & Layanan Publik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="layananPublikDropdown">
                            <li><a class="dropdown-item" href="pengaduan.php#pengaduan-masyarakat">Pengaduan
                                    Masyarakat</a></li>
                            <li><a class="dropdown-item" href="pengaduan.php#administrasi">Administrasi</a></li>
                            <li><a class="dropdown-item" href="pengaduan.php#keprotokolan">Keprotokolan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Text Box -->
    <div class="text-box">
        <h1>Berita dan Artikel</h1>
        <p>Jelajahi informasi terbaru seputar berita, fakta unik, infografis, dan artikel edukasi tentang tata kelola
            negara.</p>
    </div>

    <!-- Konten -->
    <div class="container">
        <section id="kumpulan-berita" class="section">
            <div class="section-header">
                <h2>Kumpulan Berita</h2>
            </div>
            <p>Berita tentang pemerintahan pusat dan daerah serta sorotan program unggulan seperti Kartu Prakerja dan
                Dana Desa.</p>
        </section>

        <section id="serba-serbi" class="section">
            <div class="section-header">
                <h2>Serba-serbi Negara</h2>
            </div>
            <p>Fakta unik dan data menarik seperti suku-suku di Indonesia, adat istiadat, serta komoditas unggulan
                seperti kopi dan minyak sawit.</p>
        </section>

        <section id="infografis" class="section">
            <div class="section-header">
                <h2>Infografis</h2>
            </div>
            <p>Gambar interaktif yang menjelaskan kebijakan pemerintah, serta statistik mudah dipahami seperti
                pertumbuhan ekonomi.</p>
        </section>

        <section id="artikel" class="section">
            <div class="section-header">
                <h2>Artikel</h2>
            </div>
            <p>Pendapat ahli tentang kebijakan pemerintah serta artikel edukasi tentang tata kelola negara.</p>
        </section>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <footer>
        <p>Hubungi Kami:
            <a href="#" class="footer-link">Email</a> |
            <a href="#" class="footer-link">Kontak</a> |
            <a href="#" class="footer-link">Media Sosial</a>
        </p>
        <p>
            <a href="#" class="footer-link">Peta Lokasi Kantor</a> |
            <a href="#" class="footer-link">Informasi Layanan</a>
        </p>
        <p>© 2024 E-Government | <a href="#top">Kembali ke atas</a></p>
    </footer>


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
</body>

</html>
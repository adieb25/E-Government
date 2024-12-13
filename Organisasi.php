<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Government</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('image/istana.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
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

    .section {
        padding: 60px 15px;
        margin: 40px 0;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Scroll Effect */
    html {
        scroll-behavior: smooth;
    }

    /* Footer */
    footer {
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 20px;
        text-align: center;
        font-size: 1rem;
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

    <div class="text-box">
        <h1>Selamat Datang di E-Government</h1>
        <p>
            Sistem ini dirancang untuk meningkatkan efisiensi layanan pemerintah
            melalui teknologi digital. Nikmati layanan terbaik kami!
        </p>
    </div>

    <!-- Tentang Kami Section -->
    <div id="organisasi" class="section">
        <h2>Organisasi</h2>
        <ul>
            <li><strong>Organisasi:</strong> Struktur organisasi, Profil pimpinan, Bagian dan fungsi.</li>
            <li><strong>Tata Letak dan Akuntabilitas Kinerja:</strong> Diagram, laporan tahunan, statistik.</li>
            <li><strong>Profil:</strong> Sejarah, Visi dan Misi, Nilai-nilai pemerintah.</li>
            <li><strong>Publikasi:</strong> Laporan keuangan, Statistik penting.</li>
            <li><strong>Pengadaan Barang dan Jasa:</strong> Tender, transparansi anggaran.</li>
        </ul>
    </div>

    <!-- Produk Hukum Section -->
    <div id="produk-hukum" class="section">
        <h2>Tata Letak</h2>
        <p>Informasi terkait dengan tata letak Indonesia dan hal lainya.</p>
        <ul>
            <li>Indonesia terdiri dari 38 provinsi dengan otonomi daerah, di mana struktur pemerintahannya mencakup
                pemerintah pusat hingga daerah, serta pengelolaan sumber daya alam dan pembangunan infrastruktur
                dirancang untuk mendukung pemerataan pembangunan.
            </li>

        </ul>
    </div>

    <!-- Profil -->
    <div id="profil" class="section">
        <h2>Berita & Artikel</h2>
        <p>Informasi dan berita terkini tentang pemerintah, termasuk serba-serbi negara dan artikel menarik.</p>
        <ul>
            <li><strong>Berita Pemerintah:</strong> Berita mengenai kebijakan terbaru, peraturan pemerintah, rencana
                pembangunan, atau program sosial ekonomi yang dikeluarkan oleh pemerintah.
            </li>
            <li><strong>Analisis Politik:
                </strong>Pembahasan mendalam tentang situasi politik terkini, baik di tingkat nasional maupun
                internasional, termasuk dinamika partai politik, pemilihan umum, dan peran pemerintahan. </li>
            <li><strong>Isu Sosial dan Ekonomi: </strong> Artikel mengenai dampak kebijakan pemerintah terhadap
                masyarakat, baik dalam aspek sosial, ekonomi, dan pembangunan.</li>
            <li><strong>Hukum dan Regulasi:
                </strong> Informasi tentang undang-undang, kebijakan, serta peraturan yang diterapkan oleh pemerintah
                untuk menjaga ketertiban dan keadilan di dalam masyarakat.</li>
            <li><strong>Artikel Humaniora:
                </strong> Isu budaya, sejarah, dan perkembangan sosial yang memengaruhi kehidupan masyarakat.</li>
        </ul>
    </div>

    <!-- Layanan Publik Section -->
    <div id="layanan-publik" class="section">
        <h2>Layanan Publik</h2>
        <p>Pengaduan masyarakat, administrasi, dan layanan keprotokolan tersedia untuk kenyamanan Anda.</p>
        <li><strong>Pengaduan Masyarakat:</strong> Disediakan platform online, call center, dan pusat pengaduan untuk
            menangani masalah terkait pelayanan publik, administrasi, infrastruktur, dan isu sosial.
        </li>
        <li><strong>Layanan Administrasi:
            </strong>Meliputi e-government untuk layanan seperti e-KTP, izin usaha, perpajakan, serta pembuatan surat
            dan izin lainnya secara digital.</li>
        <li><strong>Layanan Keprotokolan: </strong> Mendukung acara resmi pemerintah, pengaturan kunjungan pejabat,
            serta penyediaan informasi terkait protokol dan sumber daya.</li>
        <br>

    </div>

    <!-- Pengadaan -->
    <div id="pengadaan" class="section">
        <h2>Pengadaan barang dan Jasa</h2>
        <p>pengadaan barang dan jasa bisa dilakukan dimana saja.</p>
        <strong>Platform Pengadaan Elektronik</strong>
        <p>Pengadaan barang dan jasa saat ini banyak dilakukan melalui platform elektronik untuk mempermudah proses dan
            meningkatkan transparansi. </p>
        </ul>
        <li><strong>LPSE (Layanan Pengadaan Secara Elektronik):
            </strong>Sistem yang disediakan oleh pemerintah untuk memfasilitasi pengadaan barang dan jasa secara online.
            Semua tender pemerintah biasanya dilakukan melalui LPSE.</li>
        <li><strong>e-Catalogue:
            </strong> Merupakan sistem katalog elektronik yang menyediakan informasi barang dan jasa yang dibutuhkan
            oleh pemerintah, sehingga mempermudah proses pembelian langsung.</li>
        <br>
        <strong>Pengadaan Swasta dan Mandirik</strong>
        <li><strong>Platform Komersial:
            </strong> Banyak perusahaan menggunakan platform e-commerce atau marketplace besar untuk pengadaan kebutuhan
            operasional mereka.</li>
        <li><strong>Vendor Lokal:
            </strong> Pengadaan langsung dari vendor lokal sering dilakukan untuk mendukung pelaku usaha kecil dan
            menengah (UMKM) di daerah.</li>
        <br>
        <strong>Jenis Metode Pengadaan</strong>
        <li><strong>Tender Terbuka:
            </strong> Proses pengadaan yang melibatkan banyak peserta untuk memastikan persaingan sehat..</li>
        <li><strong>Pengadaan Langsung:
            </strong> Untuk kebutuhan dengan nilai tertentu (biasanya lebih kecil), pengadaan bisa dilakukan langsung
            kepada penyedia barang/jasa tanpa proses tender.</li>
        <li><strong>Penunjukan Langsung:
            </strong> Digunakan dalam situasi tertentu seperti kebutuhan mendesak atau barang/jasa dengan penyedia
            terbatas.</li>
        <br>
        <strong>Regulasi dan Kebijakan</strong>
        <p>Pengadaan barang dan jasa di Indonesia diatur oleh Peraturan Presiden Nomor 16 Tahun 2018 tentang Pengadaan
            Barang/Jasa Pemerintah, yang mencakup tata cara, etika, serta mekanisme pengadaan untuk memastikan keadilan
            dan efisiensi.</p>
        <strong>Keuntungan Pengadaan Elektronik</strong>
        <li><strong>Efisiensi Waktu dan Biaya:
            </strong> Sistem elektronik mempermudah akses ke berbagai penyedia barang/jasa tanpa memerlukan interaksi
            fisik.</li>
        <li><strong>Transparansi:
            </strong> Semua proses dapat diawasi dan dicatat secara digital, meminimalkan potensi penyimpangan.</li>
        <li><strong>Kemudahan Akses:
            </strong> Pengadaan bisa dilakukan dari mana saja dengan koneksi internet, tanpa perlu ke lokasi fisik.</li>
        </ul>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

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


</html>
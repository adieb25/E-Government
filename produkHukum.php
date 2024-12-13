<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Government</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('image/istana.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        font-family: 'Arial', sans-serif;
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

    /* Hero Section */
    .hero-section {
        height: 60vh;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: center;
        padding-top: 100px;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .hero-section p {
        font-size: 1.2rem;
    }

    .hero-section .btn-primary {
        background-color: #ffd700;
        border-color: #ffd700;
    }

    /* Grid Layout for Produk Hukum */
    .produk-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        border-radius: 25px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-body {
        font-size: 1rem;
    }

    .table-container {
        overflow-x: auto;
        margin-top: 30px;
        background-color: #f2f2f2
    }

    /* Footer */
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

    .section {
        color: #ffff;
    }

    /* Image */
    .card-img-top {
        width: 100%;
        max-width: 500px;
        height: 350px;
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

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to E-Government Portal</h1>
        <p>Find legal documents, services, and more in one place.</p>
        <a href="#produk-hukum-terbaru" class="btn btn-primary btn-lg">Explore Now</a>
    </div>

    <!-- Content Sections -->
    <div class="container mt-5">
        <!-- Produk Hukum Terbaru -->
        <section id="produk-hukum-terbaru" class="section">
            <h3>Produk Hukum Terbaru</h3>
            <div class="produk-grid">
                <div class="card">
                    <img src="image/Peraturan pemerintahan .jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Peraturan Pemerintah No. 1 Tahun 2024</h5>
                        <p class="card-text">
                            Peraturan Pemerintah (PP) No. 1 Tahun 2024 adalah peraturan baru yang mengatur tentang
                            Harmonisasi Kebijakan Fiskal Nasional. Tujuannya adalah menyelaraskan hubungan keuangan
                            antara pemerintah pusat dan daerah untuk meningkatkan efisiensi dan keberlanjutan
                            fiskal.
                        </p>
                        Peraturan ini mencakup: <p></p>
                        <ul>
                            <li><strong>Sinergi kebijakan fiskal
                                </strong>di berbagai tingkatan pemerintahan.</li>
                            <li><strong>Pengelolaan utang daerah.</strong>
                            </li>
                            <li><strong>Pembentukan Dana Abadi Daerah </strong> sebagai instrumen fiskal.
                            </li>
                            <li><strong>Sinergi pendanaan</strong> antara pusat dan daerah.</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="image/Surat Edaran Presiden.jpg" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Surat Edaran Presiden No. 5 Tahun 2024</h5>
                        <p class="card-text">Surat Edaran Presiden No. 5 Tahun 2024 dikeluarkan untuk mengatur
                            langkah-langkah terkait pencegahan dan penanganan perjudian daring (online) di lingkungan
                            instansi pemerintah.
                        </p>
                        Surat Edaran ini berfokus pada kewajiban setiap instansi untuk
                        mengidentifikasi dan menangani kasus-kasus terkait perjudian daring yang melibatkan pegawai
                        ASN dan non-ASN. Ini merupakan bagian dari upaya pemerintah untuk menanggulangi masalah
                        perjudian daring dengan melibatkan instansi-instansi pemerintah dalam penanganannya​ <p></p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="image/Dokumen hukum terkait keuangan negara.png" class="card-img-top" alt="Produk 3">
                    <div class="card-body">
                        <h5 class="card-title">Dokumen Hukum terkait Keuangan Negara</h5>
                        <p class="card-text">Dokumen Hukum Keuangan Negara.</p>
                        <ul>
                            <li><strong>UU Keuangan Negara (UU No. 17/2003):
                                </strong>Dasar pengelolaan APBN/APBD.</li>
                            <li><strong>UU Perbendaharaan Negara (UU No. 1/2004):</strong>Pengelolaan aset dan kas
                                negara.
                            </li>
                            <li><strong>UU Pemeriksaan Keuangan (UU No. 15/2004): </strong> Audit oleh BPK.
                            </li>
                        </ul>
                        <p>
                            Dokumen Kebijakan Terbaru
                        </p>
                        <ul>
                            <li><strong>Nota Keuangan APBN 2024:
                                </strong>Rencana anggaran tahunan pemerintah.</li>
                            <li><strong>Perpres/Permenkeu terbaru:</strong>Regulasi tentang insentif fiskal, anggaran
                                sektoral, dan reformasi pajak.
                        </ul>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk Hukum Terpopuler -->
        <section id="produk-hukum-terpopuler" class="section">
            <h3>Produk Hukum Terpopuler</h3>
            <div class="produk-grid">
                <div class="card">
                    <img src="image/Undang-Undang Ketenagakerjaan.jpg" class="card-img-top" alt="Produk 4">
                    <div class="card-body">
                        <h5 class="card-title">Undang-Undang Ketenagakerjaan</h5>
                        <p class="card-text">Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan adalah peraturan
                            yang mengatur berbagai aspek terkait ketenagakerjaan di Indonesia. UU ini bertujuan untuk
                            memberikan perlindungan kepada tenaga kerja, mengatur hubungan industrial, serta menciptakan
                            iklim ketenagakerjaan yang adil dan kondusif.</p>
                        <ul>
                            <li><strong>Perekrutan dan Perjanjian Kerja
                                </strong>UU ini mengatur hak dan kewajiban pekerja serta pemberi kerja, termasuk
                                jenis-jenis perjanjian kerja (perjanjian kerja waktu tertentu atau tidak tertentu).
                            </li>
                            <li><strong>Jam Kerja dan Lembur</strong>Jam kerja diatur maksimal 7 jam sehari dan 40 jam
                                seminggu untuk 6 hari kerja, atau 8 jam sehari dan 40 jam seminggu untuk 5 hari kerja.
                                Ketentuan upah lembur berlaku bagi pekerja yang bekerja melebihi jam kerja normal.
                            </li>
                            <li><strong>Upah dan Kesejahteraan </strong> Penetapan upah minimum diatur, termasuk upah
                                minimum provinsi (UMP) dan kabupaten/kota (UMK).
                                Hak atas tunjangan, seperti tunjangan hari raya (THR), juga dijelaskan.
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="image/Undang-Undang Pajak.jpeg" class="card-img-top" alt="Produk 5">
                    <div class="card-body">
                        <h5 class="card-title">Undang-Undang Pajak</h5>
                        <p class="card-text">Undang-Undang Pajak (UU No. 36 Tahun 2008) mengatur berbagai ketentuan
                            terkait perpajakan di Indonesia, termasuk pajak penghasilan (PPh), pajak pertambahan nilai
                            (PPN), dan pajak daerah. Undang-undang ini mengatur kewajiban pajak untuk individu dan badan
                            usaha, cara pengenaan, serta prosedur pelaporan dan pembayaran pajak.</p>
                        <ul>
                            <li><strong>Pajak Penghasilan (PPh)
                                </strong>yang mencakup penghasilan individu dan badan usaha.
                            </li>
                            <li><strong>Pajak Pertambahan Nilai (PPN)</strong>yang dikenakan atas barang dan jasa yang
                                diproduksi dan diperdagangkan.
                            </li>
                            <li><strong>Kebijakan terkait insentif pajak</strong> untuk sektor-sektor tertentu guna
                                mendukung pertumbuhan ekonomi.
                            </li>
                            <li><strong>Sanksi dan penyelesaian sengketa pajak,</strong> serta peraturan mengenai
                                kewajiban wajib pajak dalam melakukan pelaporan dan pembayaran tepat waktu.
                            </li>
                        </ul>
                        <p>UU ini bertujuan untuk memperbaiki sistem perpajakan di Indonesia, mendorong kepatuhan pajak,
                            dan mengoptimalkan pendapatan negara, yang pada gilirannya digunakan untuk mendukung
                            pembangunan nasional.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <img src="image/Peraturan Pembayaran Pajak.jpg" class="card-img-top" alt="Produk 6">
                    <div class="card-body">
                        <h5 class="card-title">Peraturan Pembayaran Pajak</h5>
                        <p class="card-text">Peraturan Pembayaran Pajak mengatur prosedur pembayaran dan pelaporan pajak
                            yang harus dipatuhi oleh wajib pajak, baik individu maupun badan usaha. Peraturan ini
                            bertujuan untuk memastikan kelancaran penerimaan pajak negara dan mengatur mekanisme
                            pembayaran yang transparan serta efisien.</p>
                        <p>Beberapa poin penting dalam peraturan ini antara lain:</p>
                        <ul>
                            <li><strong>Waktu pembayaran dan pelaporan:
                                </strong>Menetapkan batas waktu pelaporan dan pembayaran pajak, termasuk pajak
                                penghasilan (PPh), pajak pertambahan nilai (PPN), dan jenis pajak lainnya.
                            </li>
                            <li><strong>Metode pembayaran:</strong>Mengatur berbagai metode pembayaran pajak, termasuk
                                pembayaran secara elektronik melalui sistem online, untuk mempermudah wajib pajak.
                            </li>
                            <li><strong>Kewajiban pelaporan:</strong> Menegaskan kewajiban wajib pajak untuk melaporkan
                                pajak yang telah dibayar dan memastikan seluruh pembayaran sesuai dengan ketentuan yang
                                berlaku.
                            </li>
                            <li><strong>Sanksi pelanggaran:</strong> Menetapkan sanksi bagi wajib pajak yang tidak
                                mematuhi ketentuan pelaporan dan pembayaran pajak tepat waktu.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Matriks Produk Hukum -->
        <section id="matriks-produk-hukum" class="section">
            <h3>Matriks Produk Hukum</h3>
            <p>Berikut adalah tabel interaktif dengan kategori hukum:</p>
            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Tahun</th>
                            <th>Unduh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hukum Pidana</td>
                            <td>KUHP</td>
                            <td>2023</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Unduh</a></td>
                        </tr>
                        <tr>
                            <td>Hukum Perdata</td>
                            <td>Peraturan Waris</td>
                            <td>2021</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Unduh</a></td>
                        </tr>
                        <tr>
                            <td>Hukum Administrasi</td>
                            <td>Peraturan ASN</td>
                            <td>2022</td>
                            <td><a href="#" class="btn btn-primary btn-sm">Unduh</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
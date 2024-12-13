<?php
require('fpdf/fpdf.php');

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'e_government';

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

// Simpan data ke database
$sql = "INSERT INTO data_ektp (nama, nik, tempat_lahir, tanggal_lahir, alamat) VALUES ('$nama', '$nik', '$tempat_lahir', '$tanggal_lahir', '$alamat')";
if ($conn->query($sql) === TRUE) {
    // Buat PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Header
    $pdf->Cell(0, 10, 'Data e-KTP', 0, 1, 'C');
    $pdf->Ln(10);

    // Data
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Nama:', 0, 0);
    $pdf->Cell(0, 10, $nama, 0, 1);

    $pdf->Cell(50, 10, 'NIK:', 0, 0);
    $pdf->Cell(0, 10, $nik, 0, 1);

    $pdf->Cell(50, 10, 'Tempat Lahir:', 0, 0);
    $pdf->Cell(0, 10, $tempat_lahir, 0, 1);

    $pdf->Cell(50, 10, 'Tanggal Lahir:', 0, 0);
    $pdf->Cell(0, 10, $tanggal_lahir, 0, 1);

    $pdf->Cell(50, 10, 'Alamat:', 0, 0);
    $pdf->MultiCell(0, 10, $alamat);

    // Output file PDF
    $pdf_file = 'files/ektp_' . $nik . '.pdf';
    $pdf->Output('F', $pdf_file);

    // Redirect untuk unduh
    header("Location: $pdf_file");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

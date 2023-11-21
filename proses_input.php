<?php
// Ganti nilai-nilai berikut sesuai dengan pengaturan MySQL Anda
$host = "localhost";
$username = "root";
$password = "";
$database = "2106087_ahmad";

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah ada data yang dikirimkan melalui formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $makan = $_POST["makan"];
    $minum = $_POST["minum"];
    $cemilan = $_POST["cemilan"];
    $rokok = $_POST["rokok"];
    $tanggal = $_POST["tanggal"];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO catatan_harian (makan, minum, cemilan, rokok, tanggal) VALUES ('$makan', '$minum', '$cemilan', '$rokok', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sepatu";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$size = $_POST['size'];
$merk = $_POST['merk'];


// SQL untuk insert data
$sql = "INSERT INTO pesanan (name, phone, address, size, merk) VALUES ('$name', '$phone', '$address','$size','$merk')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

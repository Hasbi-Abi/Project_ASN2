<?php include 'koneksi.php';
if ($_POST) {
    $kode = $_POST['kode_produk'];
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $tgl = $_POST['tanggal_kadaluarsa'];

    mysqli_query($conn, "INSERT INTO produk (kode_produk, nama_produk, kategori, harga, tanggal_kadaluarsa) 
        VALUES ('$kode', '$nama', '$kategori', '$harga', '$tgl')");
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head><title>Tambah Produk</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Tambah Produk</h2>
    <form method="POST">
        <input class="form-control mb-2" name="kode_produk" placeholder="Kode Produk" required>
        <input class="form-control mb-2" name="nama_produk" placeholder="Nama Produk" required>
        <input class="form-control mb-2" name="kategori" placeholder="Kategori">
        <input class="form-control mb-2" name="harga" placeholder="Harga" type="number" step="0.01">
        <input class="form-control mb-2" name="tanggal_kadaluarsa" type="date">
        <button class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
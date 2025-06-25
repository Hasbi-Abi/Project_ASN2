<?php include 'koneksi.php';
$id = $_GET['id'];
$produk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));

if ($_POST) {
    $kode = $_POST['kode_produk'];
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $tgl = $_POST['tanggal_kadaluarsa'];

    mysqli_query($conn, "UPDATE produk SET 
        kode_produk='$kode', nama_produk='$nama', kategori='$kategori',
        harga='$harga', tanggal_kadaluarsa='$tgl' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Produk</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit Produk</h2>
    <form method="POST">
        <input class="form-control mb-2" name="kode_produk" value="<?= $produk['kode_produk'] ?>" required>
        <input class="form-control mb-2" name="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
        <input class="form-control mb-2" name="kategori" value="<?= $produk['kategori'] ?>">
        <input class="form-control mb-2" name="harga" value="<?= $produk['harga'] ?>" type="number" step="0.01">
        <input class="form-control mb-2" name="tanggal_kadaluarsa" value="<?= $produk['tanggal_kadaluarsa'] ?>" type="date">
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
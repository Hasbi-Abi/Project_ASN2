<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(23, 23, 23);
        }
        .header-img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body class="container py-4">
    
    <!-- Gambar di atas -->
    <img src="Assets/manajemen_produk_makanan.jpg" alt="Header Gambar" class="header-img shadow">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="mb-4 text-center text-primary">Data Produk Makanan</h2>
        <div class="text-end mb-3">
            <a href="tambah.php" class="btn btn-success">+ Tambah Produk</a>
        </div>

        <table class="table table-bordered table-hover bg-light">
            <thead class="table-dark text-center">
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Kadaluarsa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM produk");
            while ($data = mysqli_fetch_assoc($query)) {
                echo "<tr>
                    <td>{$data['kode_produk']}</td>
                    <td>{$data['nama_produk']}</td>
                    <td>{$data['kategori']}</td>
                    <td>Rp " . number_format($data['harga'], 2) . "</td>
                    <td>{$data['tanggal_kadaluarsa']}</td>
                    <td class='text-center'>
                        <a href='edit.php?id={$data['id']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapus.php?id={$data['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>

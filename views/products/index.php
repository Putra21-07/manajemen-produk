<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Daftar Produk</h2>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while (\ = \->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= \['id']; ?></td>
                <td><?= htmlspecialchars(\['nama_produk']); ?></td>
                <td>Rp <?= number_format(\['harga'], 0, ',', '.'); ?></td>
                <td><?= \['stok']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= \['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?action=delete&id=<?= \['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

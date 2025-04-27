<link rel="stylesheet" href="assets/style.css">
<div class="container">
    <h3>Edit Peminjaman</h3>
    <form action="?c=Peminjaman&m=edit_process" method="post">
        <input type="hidden" name="id" value="<?php echo $peminjaman->id; ?>">
        <input type="text" name="nama_peminjam" value="<?php echo $peminjaman->nama_peminjam; ?>" required>
        <input type="text" name="nama_barang" value="<?php echo $peminjaman->nama_barang; ?>" required>
        <input type="date" name="tanggal_pinjam" value="<?php echo $peminjaman->tanggal_pinjam; ?>" required>
        <input type="date" name="tanggal_kembali" value="<?php echo $peminjaman->tanggal_kembali; ?>" required>
        <button type="submit" class="btn">Update</button>
    </form>
</div>

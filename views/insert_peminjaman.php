<link rel="stylesheet" href="assets/style.css">
<div class="container">
    <h3>Tambah Peminjaman</h3>
    <form action="?c=Peminjaman&m=create_process" method="post">
        <input type="text" name="nama_peminjam" placeholder="Nama Peminjam" required>
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <label for="tanggal_pinjam">Tanggal Peminjaman:</label>  <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>
        <label for="tanggal_kembali">Tanggal Pengembalian:</label>  <input type="date" id="tanggal_kembali" name="tanggal_kembali" required>
        <button type="submit" class="btn">Simpan</button>
    </form>
</div>

<link rel="stylesheet" href="assets/style.css">
<div class="container">
    <h3>DAFTAR PEMINJAMAN BARANG</h3>
    <a href="?c=Peminjaman&m=create_form" class="btn">Tambah Peminjaman</a>
    <table>
        <tr><th>Nama Peminjam</th><th>Nama Barang</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Aksi</th></tr>
        <?php
        if ($peminjaman) {
            while ($data = $peminjaman->fetch_object()) {
                echo "<tr>
                        <td>{$data->nama_peminjam}</td>
                        <td>{$data->nama_barang}</td>
                        <td>{$data->tanggal_pinjam}</td>
                        <td>{$data->tanggal_kembali}</td>
                        <td>
                            <a href='?c=Peminjaman&m=edit_form&id={$data->id}' class='btn-edit'>Edit</a>
                            <a href='?c=Peminjaman&m=delete_process&id={$data->id}' class='btn-delete'>Delete</a>
                        </td>
                      </tr>";
            }
        }
        ?>
    </table>
</div>

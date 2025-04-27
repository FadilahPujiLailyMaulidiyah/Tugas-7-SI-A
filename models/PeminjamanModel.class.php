<?php
class PeminjamanModel extends Model {
    public function getAll() {
        return $this->dbconn->query("SELECT * FROM peminjaman ORDER BY id DESC");
    }

    public function insert($nama_peminjam, $nama_barang, $tanggal_pinjam, $tanggal_kembali) {
        $this->dbconn->query("INSERT INTO peminjaman (nama_peminjam, nama_barang, tanggal_pinjam, tanggal_kembali) VALUES ('$nama_peminjam', '$nama_barang', '$tanggal_pinjam', '$tanggal_kembali')");
    }

    public function getById($id) {
        return $this->dbconn->query("SELECT * FROM peminjaman WHERE id = $id");
    }

    public function update($id, $nama_peminjam, $nama_barang, $tanggal_pinjam, $tanggal_kembali) {
        $this->dbconn->query("UPDATE peminjaman SET nama_peminjam = '$nama_peminjam', nama_barang = '$nama_barang', tanggal_pinjam = '$tanggal_pinjam', tanggal_kembali = '$tanggal_kembali' WHERE id = $id");
    }

    public function delete($id) {
        $this->dbconn->query("DELETE FROM peminjaman WHERE id = $id");
    }
}
?>

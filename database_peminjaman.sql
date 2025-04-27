CREATE DATABASE IF NOT EXISTS mvc_peminjaman;

USE mvc_peminjaman;

CREATE TABLE IF NOT EXISTS peminjaman (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_peminjam VARCHAR(100) NOT NULL,
    nama_barang VARCHAR(100) NOT NULL,
    tanggal_pinjam DATE NOT NULL,
    tanggal_kembali DATE NOT NULL
);

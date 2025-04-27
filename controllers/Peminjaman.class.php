<?php
class Peminjaman extends Controller {
    public function index() {
        $model = $this->loadModel("PeminjamanModel");
        $peminjaman = $model->getAll();
        $this->loadView("peminjaman", ["peminjaman" => $peminjaman]);
    }

    public function create_form() {
        $this->loadView("insert_peminjaman");
    }

    public function create_process() {
        $model = $this->loadModel("PeminjamanModel");
        $model->insert($_POST["nama_peminjam"], $_POST["nama_barang"], $_POST["tanggal_pinjam"], $_POST["tanggal_kembali"]);
        header("Location: ?c=Peminjaman");
    }

    public function edit_form() {
        $id = $_GET["id"];
        $model = $this->loadModel("PeminjamanModel");
        $peminjaman = $model->getById($id);
        $this->loadView("edit_peminjaman", ["peminjaman" => $peminjaman->fetch_object()]);
    }

    public function edit_process() {
        $model = $this->loadModel("PeminjamanModel");
        $model->update($_POST["id"], $_POST["nama_peminjam"], $_POST["nama_barang"], $_POST["tanggal_pinjam"], $_POST["tanggal_kembali"]);
        header("Location: ?c=Peminjaman");
    }

    public function delete_process() {
        $id = $_GET["id"];
        $model = $this->loadModel("PeminjamanModel");
        $model->delete($id);
        header("Location: ?c=Peminjaman");
    }
}
?>

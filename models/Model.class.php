<?php
class Model {
    protected $dbconn;

    public function __construct() {
        $this->dbconn = @new mysqli("localhost", "root", "PWSaya(tidak saya cantumkan disini, ada di vs code password yang asli)", "mvc_peminjaman", 3307);
        if ($this->dbconn->connect_errno) {
            die("Database connection error!");
        }
    }
}
?>

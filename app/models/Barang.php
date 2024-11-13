<?php

class Barang
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM barang");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBarangById($id) {
        $stmt = $this->db->prepare("SELECT * FROM barang WHERE kode_barang = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fungsi CRUD lainnya (create, update, delete) bisa ditambahkan sesuai kebutuhan
}

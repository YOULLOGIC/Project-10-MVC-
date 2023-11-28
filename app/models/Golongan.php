<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model {

    public function show()
    {
        $sql  = "SELECT * FROM tb_golongan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $kode_gol = $_POST["kode_gol"];
        $nama_gol = $_POST["nama_gol"];

        $sql = "INSERT INTO tb_golongan (gol_kode, gol_nama) VALUES (:gol_kode, :gol_nama)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_kode", $kode_gol);
        $stmt->bindParam(":gol_nama", $nama_gol);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_golongan WHERE gol_id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama_gol = $_POST["nama_gol"];
        $timeNow  = $this->getTimeNow();
        $gol_id   = $_POST["gol_id"];

        $sql = "UPDATE tb_golongan SET
        gol_nama=:gol_nama,
        updated_at=:updated_at
        WHERE gol_id=:gol_id
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_nama", $nama_gol);
        $stmt->bindParam(":updated_at", $timeNow);
        $stmt->bindParam(":gol_id", $gol_id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_id", $id);
        $stmt->execute();
    }

    public function dataGolongan()
    {
        $sql    = "SELECT COUNT(*) as total FROM tb_golongan";
        $result = $this->db->prepare($sql);
        $result->execute();
        $rows = $result->fetchColumn();

        return $rows;
    }
}
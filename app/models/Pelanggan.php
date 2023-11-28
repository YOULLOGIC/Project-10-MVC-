<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model {

    public function show()
    {
        $sql  = "SELECT * FROM tb_pelanggan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $pel_gol_id  = $_POST["gol_id"];
        $pel_kode    = $_POST["kode"];
        $pel_nama    = $_POST["nama"];
        $pel_alamat  = $_POST["alamat"];
        $pel_hp      = $_POST["nohp"];
        $pel_ktp     = $_POST["noktp"];
        $pel_seri    = $_POST["seri"];
        $pel_meteran = $_POST["meteran"];
        $pel_aktif   = 'Y';
        $pel_id_user = $_POST["id_user"];

        $sql = "INSERT INTO tb_pelanggan (pel_id_gol, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_seri, pel_meteran, pel_aktif, pel_id_user) VALUES (:pel_id_gol, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif, :pel_id_user)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam("pel_id_gol", $pel_gol_id);
        $stmt->bindParam("pel_no", $pel_kode);
        $stmt->bindParam("pel_nama", $pel_nama);
        $stmt->bindParam("pel_alamat", $pel_alamat);
        $stmt->bindParam("pel_hp", $pel_hp);
        $stmt->bindParam("pel_ktp", $pel_ktp);
        $stmt->bindParam("pel_seri", $pel_seri);
        $stmt->bindParam("pel_meteran", $pel_meteran);
        $stmt->bindParam("pel_aktif", $pel_aktif);
        $stmt->bindParam("pel_id_user", $pel_id_user);

        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_pelanggan WHERE pel_id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $pel_nama   = $_POST["pel_nama"];
        $pel_alamat = $_POST["pel_alamat"];
        $pel_hp     = $_POST["pel_hp"];
        $pel_aktif  = $_POST["pel_aktif"];
        $pel_id     = $_POST["pel_id"];
        $timeNow    = $this->getTimeNow();

        $sql = "UPDATE tb_pelanggan SET
        pel_nama=:pel_nama,
        pel_alamat=:pel_alamat,
        pel_hp=:pel_hp,
        pel_aktif=:pel_aktif,
        updated_at=:updated_at
        WHERE pel_id=:pel_id
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_nama", $pel_nama);
        $stmt->bindParam(":pel_alamat", $pel_alamat);
        $stmt->bindParam(":pel_hp", $pel_hp);
        $stmt->bindParam(":pel_aktif", $pel_aktif);
        $stmt->bindParam(":updated_at", $timeNow);
        $stmt->bindParam(":pel_id", $pel_id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function dataPelanggan()
    {
        $sql    = "SELECT COUNT(*) as total FROM tb_pelanggan";
        $result = $this->db->prepare($sql);
        $result->execute();
        $rows = $result->fetchColumn();

        return $rows;
    }

}
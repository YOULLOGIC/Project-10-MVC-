<?php

namespace App\Models;

use App\Core\Model;

class User extends Model {
    public function show()
    {
        $sql  = "SELECT * FROM tb_users ORDER BY user_id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $email      = $_POST["email"];
        $password   = $_POST["password"];
        $nama       = $_POST["nama"];
        $alamat     = $_POST["alamat"];
        $nohp       = $_POST["nohp"];
        $kodepos    = $_POST["kodepos"];
        $user_role  = "1";
        $user_aktif = "1";

        $sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_alamat, user_hp,  user_pos, user_role, user_aktif) VALUES (:user_email, :user_password, :user_nama, :user_alamat, :user_hp, :user_pos, :user_role, :user_aktif)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $email);
        $stmt->bindParam(":user_password", $password);
        $stmt->bindParam(":user_nama", $nama);
        $stmt->bindParam(":user_alamat", $alamat);
        $stmt->bindParam(":user_hp", $nohp);
        $stmt->bindParam(":user_pos", $kodepos);
        $stmt->bindParam(":user_role", $user_role);
        $stmt->bindParam(":user_aktif", $user_aktif);

        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_users WHERE user_id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $user_id  = $_POST["user_id"];
        $email    = $_POST["email"];
        $password = $_POST["password"];
        $nama     = $_POST["nama"];
        $alamat   = $_POST["alamat"];
        $nohp     = $_POST["nohp"];
        $kodepos  = $_POST["kodepos"];
        $timeNow  = $this->getTimeNow();

        $sql = "UPDATE tb_users SET
        user_email=:user_email,
        user_password=:user_password,
        user_nama=:user_nama,
        user_alamat=:user_alamat,
        user_hp=:user_hp,
        user_pos=:user_pos,
        updated_at=:updated_at 
        WHERE user_id=:user_id 
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $email);
        $stmt->bindParam(":user_password", $password);
        $stmt->bindParam(":user_nama", $nama);
        $stmt->bindParam(":user_alamat", $alamat);
        $stmt->bindParam(":user_hp", $nohp);
        $stmt->bindParam(":user_pos", $kodepos);
        $stmt->bindParam(":updated_at", $timeNow);
        $stmt->bindParam(":user_id", $user_id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_users WHERE user_id=:user_id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_id", $id);
        $stmt->execute();
    }

    public function dataUser()
    {
        $sql    = "SELECT COUNT(*) as total FROM tb_users";
        $result = $this->db->prepare($sql);
        $result->execute();
        $rows = $result->fetchColumn();

        return $rows;
    }
}
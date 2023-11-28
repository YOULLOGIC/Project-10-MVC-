<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model {
    public function proses()
    {
        $user_email = $_POST["user_email"];
        $password   = $_POST["password"];

        $sql  = "SELECT * FROM tb_users WHERE user_email=:user_email AND user_password=:password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $user_email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        return $stmt->fetch();
    }
}

?>
<?php

namespace App\Core;

use DateTime;

class Controller {
    public function login($view)
    {
        require_once ROOT . "layouts/login.php";
    }

    public function dashboard($view, $data = [])
    {
        require_once ROOT . "layouts/dashboard.php";
    }

    public static function cekLogin()
    {
        if (!isset($_SESSION["login"]) || $_SESSION["login"] != true) {
            header("Location:" . URL);
            exit;
        }
    }
}

?>
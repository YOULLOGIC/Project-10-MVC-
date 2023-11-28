<?php

namespace App;

class Config {
    public function __construct()
    {

        if (session_id() === "") {
            session_start();
        }

        // Setting TimeZone
        date_default_timezone_set("Asia/Jakarta");

        // URL dan Assets
        define("URL", "http://localhost/pbwl/mvc project 10");
        define("AST", URL . "/layouts/assets");

        define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);
    }
}
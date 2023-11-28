<?php
// Melaporkan ERROR
error_reporting(E_ALL);

// Autoload Vendor pada Composser
require_once __DIR__ . '/vendor/autoload.php';

// Initial Whoops
$whoops = new \Whoops\Run;
// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
// $whoops->register();

new App\Config();
new App\Core\Bootstrap();
<?php  

namespace App\Core;

class Bootstrap {
    public function __construct() {

        // Jika url diakses
        if (isset($_GET['page'])) {

            // filter_var = Memfilter/Membersihkan url dari karakter aneh/yang dapat menggangu jalannya sistem
            $url = filter_var($_GET['page'], FILTER_SANITIZE_URL);

            // str_replace = Menghilangkan Space
            $url = str_replace(' ', '', $url);

            // Explode = Membagi string diantara slash, outputnya array
            $url = explode('/', $url);

            // ucfirst = Uppercase  First Character
            // array_shift = Menampilkan nilai array pertama
            $page = ucfirst(array_shift($url));

            if (file_exists(ROOT . 'app/controllers/' . $page . '.php')) {
                $class = 'App\\Controllers\\' . $page;
                $controller = new $class;

                // Cek Method
                if ($url != null) {
                    $action = array_shift($url);
                } else {
                    $action = '';
                }

                // Cek Parameter 
                if (method_exists($controller, $action)) {
                    // Parameter = controllers/product/1
                    $params = array_values($url);
                    if (!empty($params)) {
                        call_user_func_array(array($controller, $action), $params);
                    } else {
                        $controller->{$action}(@$url);
                    }
                } else {
                    $controller->index();
                }
            } else {
                $class = 'App\\Core\\Error';
                $controller = new $class();
                $controller->fileNotFound();
            }
        } else {
            $class = 'App\\Controllers\\Index';
            $controller = new $class();
            $controller->index();
        }
    }
}
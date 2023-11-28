<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas - MVC</title>
    <link href="<?= AST; ?>/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="height: 100vh;" class="bg-light">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="container w-25 bg-white rounded shadow p-5">
            <?php
            require_once ROOT . "app/views/" . $view . ".php";
            session_destroy();
            ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
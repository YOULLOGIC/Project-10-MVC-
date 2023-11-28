<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MVC PROJECT 10</title>
  
  <link href="<?= AST; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= AST; ?>/css/styles.css" rel="stylesheet">
  <link href="<?= AST; ?>/datatables/datatables.min.css" rel="stylesheet">
</head>

<body>
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="shadow">
      <ul class="sidebar-nav">
          <img class="icon-1" src="<?php echo AST; ?>/img/pln.png" >
          <div class="user"><?php echo $_SESSION['user']['user_nama']; ?></div>

        </li>
        <div class="data">
          <li>
            <a href="<?= URL; ?>/dashboard">
            <img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Dashboard</a>
          </li>
          <li>
            <a href="<?= URL; ?>/users">
            <img class="icon" src="<?php echo AST; ?>/img/user.png" alt="">User</a>
          </li>
          <li>
            <a href="<?= URL; ?>/golongan">
            <img class="icon" src="<?php echo AST; ?>/img/gol.png" alt="">Golongan</a>
          </li>
          <li>
            <a href="<?= URL; ?>/pelanggan">
            <img class="icon" src="<?php echo AST; ?>/img/pelanggan.png" alt="">Pelanggan</a>
          </li>
          <br>
          <li>
            <a href="<?= URL; ?>/dashboard/logout" class="border-top btn btn-danger fw-bold">
            <img class="iconn" src="<?php echo AST; ?>/img/logout.png" alt="">Logout</a>
          </li>
        </div>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <article>
              <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
            </article>

          </div>
        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <footer>
      Copyright &copy;
      <?php echo date('Y'); ?>. Designed By <a href="https://instagram.com/wahyuputraprayuda03?igshid=MzMyNGUyNmU2YQ=="
        target="__blank">Wahyu Putra Prayuda</a>
    </footer>
    <!-- /#wrapper -->

    <!-- Import Modul Javascript -->
    <script src="<?= AST; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= AST; ?>/datatables/datatables.min.js"></script>

    <script>
      new DataTable('#dtb', {
        info: false,
        ordering: true,
        paging: true
      });
    </script>
</body>

</html>
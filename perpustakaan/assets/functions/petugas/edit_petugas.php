<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard | Online-Perpus</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>

  <body>

  <?php
    require_once "../connection.php";
    session_start();
    if(!$_SESSION){
      echo "<script>alert('Silahkan Lakukan Login Terlebih Dahulu!!'); location.href = 'index.php';</script>";
    }
  ?>

    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../../dashboard.php">Perpus Online</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../../dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anggota.php">
              <span data-feather="shopping-cart"></span>
              Anggota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../buku.php">
              <span data-feather="book"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../../peminjaman.php">
              <span data-feather="users"></span>
              Peminjaman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <?php
        $id_petugas = $_GET['id'];
        $sql = "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
      ?>

      <h2>Edit Data Petugas</h2>
    <form action="update_petugas.php" method="POST">

     <div class="form-floating mt-4">
        <input type="hidden" class="form-control" id="floatingInput" placeholder="Id Petugas" name="id_petugas" value="<?=$row['id_petugas']?>">
        <label for="floatingInput">Id Petugas</label>
     </div>


     <div class="form-floating mt-4">
       <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="<?=$row['username']?>" required>
        <label for="floatingInput">Username</label>
     </div>
        
     <div class="form-floating mt-4">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?=$row['password']?>" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mt-4">
       <input type="text" class="form-control" id="floatingInput" placeholder="Nama Petugas" name="nama_petugas" value="<?=$row['nama_petugas']?>" required>
        <label for="floatingInput">Nama Petugas</label>
     </div>

     <div class="form-floating mt-4">
       <input type="text" class="form-control" id="floatingInput" placeholder="Alamat Petugas" name="alamat_petugas" value="<?=$row['alamat_petugas']?>" required>
        <label for="floatingInput">Alamat Petugas</label>
     </div>

     <div class="form-floating mt-4">
      <select name="jenis_kelamin" id="floatingInput" class="form-control" placeholder="Jenis Kelamin" value="<?=$row['jenis_kelamin']?>" required>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <label for="floatingInput">Jenis Kelamin</label>
     </div>

     <div class="form-floating mt-4">
      <select name="agama" id="floatingInput" class="form-control" placeholder="Agama" value="<?=$row['agama']?>" required>
        <option value="Hindu">Hindu</option>
        <option value="Islam">Islam</option>
        <option value="Kristen Protestan">Kristen Protestan</option>
        <option value="Kristen Katolik">Kristen Katolik</option>
        <option value="Buddha">Buddha</option>
        <option value="Kong Hu Chu">Kong Hu Chu</option>
      </select>
      <label for="floatingInput">Agama</label>
     </div>

     <div class="form-floating mt-4">
      <select name="jabatan" id="floatingInput" class="form-control" placeholder="Jabatan" value="<?=$row['jabatan']?>" required>
        <option value="Admin">Admin</option>
        <option value="Petugas">Petugas</option>
      </select>
      <label for="floatingInput">Jabatan</label>
     </div>


     <input type="submit" class="btn btn-success mt-4 float-end" value="Simpan">
     <?php }?>
    <?php } ?>

    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

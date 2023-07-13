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
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
  
  <?php
    require_once "assets/functions/connection.php";
    session_start();
    if(!$_SESSION){
      echo "<script>alert('Silahkan Lakukan Login Terlebih Dahulu!!'); location.href = 'index.php';</script>";
    }
  ?>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php">Perpus Online</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="assets/functions/logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">
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
            <a class="nav-link" href="buku.php">
              <span data-feather="book"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="peminjaman.php">
              <span data-feather="users"></span>
              Peminjaman
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      </div>

      <h2>Daftar Petugas</h2>
      <div class="table-responsive">
      <?php if ($_SESSION['jabatan'] == 'Admin'){?>
      <button type="button" class="btn btn-success"><a href="assets/functions/petugas/tambah_petugas.php" class="text-decoration-none text-white">Tambah</a></button>
      <?php } ?>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Nama Petugas</th>
              <th scope="col">Alamat Petugas</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Agama</th>
              <th scope="col">Jabatan</th>
              <?php if ($_SESSION['jabatan'] == 'Admin'){?>
              <th scope="col">Aksi</th>
              <?php }?>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              $sql = "SELECT * FROM petugas";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            ?>
            <tr>
              <td><?= $i++?></td>
              <td><?= $row['username']?></td>
              <td><?= $row['nama_petugas']?></td>
              <td><?= $row['alamat_petugas']?></td>
              <td><?= $row['jenis_kelamin']?></td>
              <td><?= $row['agama']?></td>
              <td><?= $row['jabatan']?></td>
              <?php if ($_SESSION['jabatan'] == 'Admin'){?>
              <td><div class="btn-group">
              <button type="button" class="btn btn-sm btn-primary"><a href="assets/functions/petugas/edit_petugas.php?id=<?=$row['id_petugas']?>" class="text-decoration-none text-white">Edit</a></button>
              <button type="button" class="btn btn-sm btn-danger"><a href="assets/functions/petugas/hapus_petugas.php?id=<?=$row['id_petugas']?>" class="text-decoration-none text-white">Hapus</a></button>
              </div></td>
              <?php }?>
            </tr>
            <?php } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

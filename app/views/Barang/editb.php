
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Barang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
  <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4e7da; 
            color: #4e342e;
            margin: 20px;
            
        } */

        h1 {
            color: #6d4c41; /* Warna judul coklat gelap */
            margin-bottom: 20px;
        }

        form {
            background-color: #fff; /* Warna latar belakang form */
            border: 1px solid #d7ccc8; /* Border coklat muda */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            max-width: 400px; /* Lebar maksimum form */
            margin: auto; /* Pusatkan form */
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #d7ccc8; /* Border coklat muda */
            border-radius: 4px; /* Sudut membulat */
        }

        button {
            padding: 10px 15px;
            background-color: #8d6e63; /* Warna tombol coklat */
            color: white;
            border: none;
            border-radius: 4px; /* Sudut membulat tombol */
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #6d4c41; /* Warna tombol saat hover */
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #4e342e; /* Warna link coklat tua */
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style> 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Penjualan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Anggun Dwi K.</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="index.php?controller=barang&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=pelanggan&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=transaksi&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Blank Page</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?controller=home&action=index">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
           <!-- Default box -->
           <h1 style="text-align: center;">Edit Barang</h1>
    <form action="index.php?controller=barang&action=update" method="POST">
        <input type="hidden" name="kode_barang" value="<?= htmlspecialchars($barang['kode_barang']) ?>">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']) ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= htmlspecialchars($barang['harga']) ?>" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?= htmlspecialchars($barang['stok']) ?>" required><br>

        <button type="submit">Update</button>
        <button type="submit">Batal</button>
    </form>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Anggun Dwi K</a></strong> 
  </footer>

<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
<script>
   
</script>

</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>AdminLTE 3 | Data Tables</title>
    <?php $this->load->view('admin/include/stylesheet');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <!-- Navbar -->
   <?php $this->load->view('admin/include/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/include/sidebar');?>
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Gerai Ayamku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Picture</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $produk){ ?>
                <tr>
                  <td><?php echo $produk['kd_brg']; ?></td>
                  <td><img src="<?php echo $produk['image']; ?>" width="100" height="100"></td>
                  <td><?php echo $produk['nm_brg']; ?></td>
                  <td> <?php echo $produk['harga']; ?></td>
                  <td><?php echo $produk['stok']; ?></td>
                  <td><?php echo $produk['deskripsi']; ?></td>
                  <td> 
                  <a href="<?php echo base_url();?>Admin/hapusproduk/<?php echo $produk['kd_brg'];?>" class="btn btn-sm btn-danger"><i class="fa fa-times" aria-hidden="ture"></i></a>
                  </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/include/footer');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('admin/include/javascript');?>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>

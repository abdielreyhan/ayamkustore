<!DOCTYPE html>
<html>
<head>
    <title>AdminLTE 3 | General Form Elements</title>
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
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form" method="post" action="<?php echo base_url('Admin/prosestambahproduk'); ?>"> -->
              <?php echo form_open("Admin/prosestambahproduk", array('enctype'=>'multipart/form-data')); ?>
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" name="kdbrg" placeholder="Enter Kode">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control" name="Namaproduk" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Satuan</label>
                    <input type="text" class="form-control" name="satuan" placeholder="Kg,Buah,Berat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="Harga Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="Stock Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock Minimal</label>
                    <input type="text" class="form-control" name="stock_min" placeholder="Stock Minimal Produk">
                  </div>
                  <div class="form-group">
                    <h3>Foto Produk</h3>
                    <small>300x300 bertipe jpg,png,jpeg</small>
                    <input type="file" class="form-control" name="input_gambar">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="upload" class="btn btn-primary">Submit</button>
                </div>
              <!-- </form> -->
              <?php echo form_close(); ?>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Ayamku | Log in</title>
  <?php $this->load->view('admin/include/stylesheet'); ?>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your Ayam</p>

      <form action="<?php echo base_url('Login/LoginProses'); ?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="user" class="form-control" placeholder="UserId">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
    </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php $this->load->view('admin/include/javascript'); ?>
</body>
</html>

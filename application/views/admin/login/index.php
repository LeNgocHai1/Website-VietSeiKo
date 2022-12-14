<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo public_url('admin/')?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo public_url('admin/')?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo public_url('admin/')?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo public_url('admin/')?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo public_url('admin/')?>plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition login-page">
	<div class="login-box">
	  <div class="login-logo">
	    <a href="<?php echo base_url('home');?>"><b>VIETSEIKO</b></a>
	  </div>
	  <!-- /.login-logo -->
	  <div class="login-box-body">
	    <p class="login-box-msg">Đăng nhập đến bảng quản trị VIETSEIKO</p>

	    <form action="<?php echo admin_url('login/index');?>" class="form" method="post">
	      <div class="form-group has-feedback">
	        <input type="text" name="username" class="form-control" placeholder="Username">
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="password" name="password" class="form-control" placeholder="Password">
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
	      	<div style="color:red;font-weight:blod;text-align:center"><?php echo form_error('login');?></div>
	        <div class="col-xs-8">
	          <!-- <div class="checkbox icheck">
	            <label>
	              <input type="checkbox"> Nhớ tôi
	            </label>
	          </div> -->
	          <a href="#"> Quên mật khẩu ?</a><br>
	        </div>
	        <!-- /.col -->

	        <div class="col-xs-4">
	        	
	          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Đăng nhập">
	        </div>
	        <!-- /.col -->

	      </div>
	    </form>

	    <!-- <div class="social-auth-links text-center">
	      <p>- OR -</p>
	      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
	        Facebook</a>
	      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
	        Google+</a>
	    </div> -->
	    <!-- /.social-auth-links -->

	    
	    

	  </div>
	  <!-- /.login-box-body -->
	</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?php echo public_url('admin/')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo public_url('admin/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo public_url('admin/')?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
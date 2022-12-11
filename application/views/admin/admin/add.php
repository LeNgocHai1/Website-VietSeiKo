     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý quản trị viên
        <small> Quản trị viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/admin')?>"> Quản lý quản trị viên </a></li>
        <li class="active"> Thêm mới quản trị viên</li>
      </ol>
    </section>

    <section class="content-header">  
      <div class="row">
        <div class="box box-solid box-info"> 
          <?php $this->load->view('admin/admin/head')?>
         
            <div class="col-sm-2"></div>
            <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Thêm mới quản trị viên</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php admin_url('admin/add')?>" method="post">
               
                <div class="box-body">
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Họ và Tên</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name')?>" placeholder=" Họ và Tên">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Tài khoản</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username')?>" placeholder=" Tài khoản">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('username')?></div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Số điện thoại </label>
                  <div class="col-sm-8">
                    <input type="text" name="phone" class="form-control" id="inputPassword3" value="<?php echo set_value('phone');?>" placeholder="Số điện thoại" >
                    <span name="re_password_autocheck" class="autocheck"></span>
              <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                  </div>
                </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo set_value('email')?>" placeholder="Email@gmail.com">
                      <span name="Email_autocheck" class="autocheck"></span>
                       <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="password" value="<?php echo set_value('password')?>" id="inputPassword3" placeholder="Mật khẩu">
                      <span name="password_autocheck" class="autocheck"></span>
                      <div name="password_error" class="clear error" style="color: red;"><?php echo form_error('password')?></div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Xác nhận mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" name="re_password" class="form-control" id="inputPassword3" placeholder="Xác nhận mật khẩu">
                      <span name="re_password_autocheck" class="autocheck"></span>
                <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('re_password')?></div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.box-body -->
                
               <div class="box-footer">                
                  <input type="submit" class="btn btn-info pull-right" value="Thêm">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            
            
          </div>
          <!--/.col (right) -->
        </div>
      </div>
    </section>

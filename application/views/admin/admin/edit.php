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
          <?php $this->load->view('admin/message',$this->data);?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Chỉnh sửa quản trị viên</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php admin_url('admin/edit')?>" method="post">
             <!-- Name -->
              <div class="box-body">
                <div class="form-group">
                  <label for="username" class="col-sm-3 control-label"> Họ và Tên</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $infor->name?>" placeholder=" Họ và Tên">
                    <span name="name_autocheck" class="autocheck"></span>
                    <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
                  </div>
                </div>
                <!-- Username -->
                <div class="form-group">
                  <label for="username" class="col-sm-3 control-label"> Tài khoản</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $infor->username?>" >
                    <span name="name_autocheck" class="autocheck"></span>
                    <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('username')?></div>
                  </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo $infor->email?>" \>
                    <span name="Email_autocheck" class="autocheck"></span>
                     <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                  </div>
                </div>
                <!-- Mật khẩu -->
               <!--  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" value="<?php echo $info->password?>" id="inputPassword3" disabled>
                    <span name="password_autocheck" class="autocheck"></span>
                    <div name="password_error" class="clear error" style="color: red;"><?php echo form_error('password')?></div>
                  </div>
                </div>
 -->                <!-- phone -->
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Số điện thoại </label>
                  <div class="col-sm-8">
                    <input type="text" name="phone" class="form-control" id="inputPassword3" value="<?php echo $infor->phone?>" >
                    <span name="re_password_autocheck" class="autocheck"></span>
              <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                  </div>
                </div>
                <!-- Address -->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label"> Địa chỉ </label>
                  <div class="col-sm-8">
                    <input type="text" name="address" class="form-control" id="inputPassword3" value="<?php echo $infor->address?>">
                    <span name="re_password_autocheck" class="autocheck"></span>
              <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('address')?></div>
                  </div>
                </div>
                <!-- Gender -->
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Giới tính </label>
                  <div class="col-sm-8">
                    <input type="text" name="gender" class="form-control" id="inputPassword3" value="<?php echo $infor->gender?>">
                    <span name="re_password_autocheck" class="autocheck"></span>
              <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('gender')?></div>
                  </div>
                </div>                
              </div>
              <!-- /.box-body -->
              
             <div class="box-footer">                
                <input type="submit" class="btn btn-info pull-right" value=" Lưu">
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
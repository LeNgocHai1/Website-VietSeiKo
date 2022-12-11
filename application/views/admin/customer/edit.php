     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý ứng viên
        <small>Cập nhật ứng viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('customer')?>">Quản lý ứng viên </a></li>
        <li class="active">Cập nhật</li>
      </ol>
    </section>

    <section class="content-header"> 
      <div class="row">
        <div class="box box-solid box-info"> 
          <?php $this->load->view('admin/customer/head')?>
         
            <div class="col-sm-2"></div>
            <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Cập nhật thông tin ứng viên</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo admin_url('customer/edit')?>" method="post">
               
                <div class="box-body">
                  <!--  Name --> 
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Họ và tên</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo $customer_infor->name?>">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
                    </div>
                  </div>
                  <!-- Gioi tinh -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Giới tính</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $customer_infor->gender?>" placeholder="Giới tính">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('gender')?></div>
                    </div>
                  </div>

                  <!-- Năm sinh -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Năm sinh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="age" id="code" value="<?php echo $customer_infor->age?>" placeholder=" Năm sinh">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('age')?></div>
                    </div>
                  </div>

                  <!-- Phone -->
                  <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Di động</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $customer_infor->phone?>">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                    </div>
                  </div> 

                  <!-- Email -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" id="email" value="<?php echo $customer_infor->email?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                    </div>
                  </div>

                  <!--  -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Địa chỉ </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" value="<?php echo $customer_infor->address?>" placeholder=" Địa chỉ ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('address')?></div>
                    </div>
                  </div>

                  <!-- Jobs -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngành nghề </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="jobs" id="jobs" value="<?php echo $customer_infor->jobs?>" placeholder=" Ngành nghề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('jobs')?></div>
                    </div>
                  </div>

                  <!--  Address job -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Địa điểm làm việc mong muốn</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address_jobs" id="address_jobs" value="<?php echo $customer_infor->address_jobs?>" placeholder=" Địa điểm làm việc mong muốn">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('address_jobs')?></div>
                    </div>
                  </div>

                  <!-- Salary -->
                 <!--  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Mức lương</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="salary" id="salary" value="<?php echo $customer_infor->salary?>" placeholder="Mức lương">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('salary')?></div>
                    </div>
                  </div> -->

                  
                  <!-- Languages -->
                 <!--  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngôn ngữ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="languages" id="languages" value="<?php echo $customer_infor->languages?>" placeholder=" Ngôn ngữ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('languages')?></div>
                    </div>
                  </div>
 -->
                  
                
                  <!-- Pass -->

                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $customer_infor->pass?>" placeholder="Mật khẩu">
                      <span name="Email_autocheck" class="autocheck"></span>
                       <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('pass')?></div>
                    </div>                  
                  </div> -->

                  <!-- Yêu cầu gửi hồ sơ -->
                  <!-- <div class="form-group">
                    <label for="req" class="col-sm-3 control-label"> Xác nhận mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="re_pass" id="re_pass" value="<?php echo $customer_infor->re_pass?>" placeholder=" Xác nhận mật khẩu">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('re_pass')?></div>
                    </div>
                  </div> -->

                  <!-- Hạn nhận hồ sơ -->
                  <!-- <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Kèm CV</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="cv" id="cv" value="<?php echo set_value('cv')?>">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('cv')?></div>
                    </div>
                  </div> -->

                </div>
                <!-- /.box-body -->
                
               <div class="box-footer">                
                  <input type="submit" class="btn btn-info pull-right" value="Cập nhật">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
            
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.box -->
      </div>
    <!-- /.row -->
    </section>

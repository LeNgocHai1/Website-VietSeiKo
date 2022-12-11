

    <section class="content-header"> 
      <div class="row">
        <div class="box">          
         
            
            <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-solid box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Đăng ký ứng viên</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo users_url('customer/add')?>" method="post">
               
                <div class="box-body">
                  <!--  Name -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Họ và tên</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name')?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
                    </div>
                  </div>
                  <!-- Gioi tinh -->
                 <!--  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Giới tính</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="gender" id="gender" value="<?php echo set_value('gender')?>" placeholder="Giới tính">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('gender')?></div>
                    </div>
                  </div> -->

                  <!-- Năm sinh -->
              <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Năm sinh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="age" id="code" value="<?php echo set_value('age')?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('age')?></div>
                    </div>
                  </div> 

                   <!-- Phone -->
              <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Di động</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="phone" id="code" value="<?php echo set_value('phone')?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                    </div>
                  </div> 

                  <!-- Email -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email')?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                    </div>
                  </div>

                  <!--  -->
                  <!-- <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Địa chỉ </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" value="<?php echo set_value('address')?>" placeholder=" Địa chỉ ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('address')?></div>
                    </div>
                  </div> -->

                  <!-- Jobs -->
                 <!--  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngành nghề </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="jobs" id="jobs" value="<?php echo set_value('jobs')?>" placeholder=" Ngành nghề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('jobs')?></div>
                    </div>
                  </div> -->

                  <!--  Address job -->
                  <!-- <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Địa điểm làm việc mong muốn</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address_jobs" id="address_jobs" value="<?php echo set_value('address_jobs')?>" placeholder=" Địa điểm làm việc mong muốn">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('address_jobs')?></div>
                    </div>
                  </div> -->

                 

                  
                  <!-- Languages -->
                 <!--  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngôn ngữ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="languages" id="languages" value="<?php echo set_value('languages')?>" placeholder=" Ngôn ngữ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('languages')?></div>
                    </div>
                  </div> -->

                  
                
                  <!-- Pass -->

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="pass" id="pass" value="<?php echo set_value('pass')?>" >
                      <span name="Email_autocheck" class="autocheck"></span>
                       <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('pass')?></div>
                    </div>                  
                  </div>

                  <!-- Yêu cầu gửi hồ sơ -->
                  <div class="form-group">
                    <label for="req" class="col-sm-3 control-label"> Xác nhận mật khẩu</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="re_pass" id="re_pass" value="<?php echo set_value('re_pass')?>" >
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('re_pass')?></div>
                    </div>
                  </div>
                       <!-- Nội dung yêu cầu -->
              <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Nội dung </label>
                    <div class="col-sm-8">
                      <textarea name="content" class="form-control" rows="3" resizeable="false" style="background-color: rgb(255, 255, 255); margin: 0px; height: 36px; width: 449px;"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('age')?></div>
                    </div>
                  </div> 


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
                  <input type="submit" class="btn btn-info pull-right" value="Thêm">
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

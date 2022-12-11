     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý tin
        <small>Tin mới</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('news')?>">Quản lý tin</a></li>
        <li class="active"> Thêm tin mới</li>
      </ol>
    </section>

    <section class="content-header"> 
      <div class="row">
        <div class="box box-solid box-info"> 
          <?php $this->load->view('admin/news/head')?>
         
            <div class="col-sm-2"></div>
            <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Thêm tin mới</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo admin_url('news/add')?>" method="post">
               
                <div class="box-body">
                  <!-- Company Name -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Chức danh</label>
                    <div class="col-sm-8">                     
                      <input type="text" class="form-control" name="nameNews" id="nameNews" value="<?php echo set_value('nameNews')?>" placeholder=" Chức danh">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('nameNews')?></div>
                    </div>
                  </div>
                  <!-- Seo title -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> SEO tên</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nameNews_flug" id="nameNews_flug" value="<?php echo set_value('nameNews_flug')?>" placeholder="example-chuc-danh">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('nameNews_flug')?></div>
                    </div>
                  </div>

                  <!-- Code -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Mã công việc</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="code" id="code" value="<?php echo set_value('code')?>" placeholder="Mã công việc">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('code')?></div>
                    </div>
                  </div>

                  <!-- Information Company -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Chức danh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="infoCPN" id="infoCPN" value="<?php echo set_value('infoCPN')?>" placeholder=" Thông tin công ty">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('infoCPN')?></div>
                    </div>
                  </div>

                  <!-- Staff Number -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Số lượng tuyển</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="staffNumber" id="staffNumber" value="<?php echo set_value('staffNumber')?>" placeholder=" Số nhân viên ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('staffNumber')?></div>
                    </div>
                  </div>

                  <!-- Jobs -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngành nghề </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="jobs" id="jobs" value="<?php echo set_value('jobs')?>" placeholder=" Ngành nghề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('jobs')?></div>
                    </div>
                  </div>

                  <!--  Address job -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Địa điểm làm việc</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" value="<?php echo set_value('address')?>" placeholder=" Địa điểm làm việc">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('address')?></div>
                    </div>
                  </div>

                  <!-- Salary -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Mức lương</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="salary" id="salary" value="<?php echo set_value('salary')?>" placeholder="Mức lương">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('salary')?></div>
                    </div>
                  </div>

                  <!-- Descr 1 -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Mô tả thêm công việc </label>
                    <div class="col-sm-8">
                      <textarea id="editor1" class="form-control" name="descr_1" value="<?php echo set_value('descr_1')?>"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_1')?></div>
                    </div>
                  </div>

                  <!-- Languages -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngôn ngữ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="languages" id="languages" value="<?php echo set_value('languages')?>" placeholder=" Ngôn ngữ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('languages')?></div>
                    </div>
                  </div>

                  <!-- Descr 2 -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Mô tả thêm kỹ năng </label>
                    <div class="col-sm-8">
                      <textarea id="editor2" class="form-control" name="descr_2"  value="<?php echo set_value('descr_2')?>"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_2')?></div>
                    </div>
                  </div>

                  <!-- Chế độ phúc lợi -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Chế độ phúc lợi </label>
                    <div class="col-sm-8">
                      <textarea id="editor3" class="form-control" name="benefit"  value="<?php echo set_value('benefit')?>"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('benefit')?></div>
                    </div>
                  </div>

                  <!-- Cách ứng tuyển -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Cách tuyển</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="ctuyen" id="ctuyen" value="<?php echo set_value('ctuyen')?>" placeholder="Cách tuyển">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('ctuyen')?></div>
                    </div>
                  </div> 

                  <!-- người phụ trách -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Người phụ trách</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="manager" id="manager" value="<?php echo set_value('manager')?>" placeholder="Người phụ trách">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('manager')?></div>
                    </div>
                  </div> 

                  <!-- Phone -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Điện thoại</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="phone" id="phone" value="<?php echo set_value('phone')?>" placeholder="Điện thoại">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                    </div>
                  </div> 

                  <!-- Email -->

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo set_value('email')?>" placeholder="example@gmail.com">
                      <span name="Email_autocheck" class="autocheck"></span>
                       <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                    </div>                  
                  </div>

                  <!-- Yêu cầu gửi hồ sơ -->
                  <div class="form-group">
                    <label for="req" class="col-sm-3 control-label"> Yêu cầu gửi hồ sơ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="req" id="salary" value="<?php echo set_value('req')?>" placeholder=" Yêu cầu gửi hồ sơ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('req')?></div>
                    </div>
                  </div>

                  <!-- Hạn nhận hồ sơ -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Hạn nhận hồ sơ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="receipt" id="receipt" value="<?php echo set_value('receipt')?>" placeholder="Hạn nhận hồ sơ">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('receipt')?></div>
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
        <!-- /.box -->
      </div>
    <!-- /.row -->
    </section>

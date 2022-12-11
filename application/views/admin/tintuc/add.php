     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý tin
        <small>Tin mới</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('tintuc')?>">Quản lý tin</a></li>
        <li class="active"> Thêm tin mới</li>
      </ol>
    </section>

    <section class="content-header"> 
      <div class="row">
        <div class="box box-solid box-info"> 
          <?php $this->load->view('admin/tintuc/head')?>
         
            <div class="col-sm-2"></div>
            <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Thêm tin tức mới</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo admin_url('tintucs/add')?>" method="post">
               
                <div class="box-body">
                  <!-- Company Name -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Tiêu đề </label>
                    <div class="col-sm-8">                     
                      <input type="text" class="form-control" name="nameNews" id="nameNews" value="<?php echo set_value('nameNews')?>" placeholder=" Tiêu đề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('nameNews')?></div>
                    </div>
                  </div>                
                  <!-- Descr 1 -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Nội dung </label>
                    <div class="col-sm-8">
                      <textarea id="editor1" class="form-control" name="descr_1" value="<?php echo set_value('descr_1')?>"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_1')?></div>
                    </div>
                  </div>
       

                  <!-- Jobs -->
              
                 <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Mô tả </label>
                    <div class="col-sm-8">
                      <textarea id="editor1" class="form-control" name="descr_2" value="<?php echo set_value('descr_2')?>"></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_1')?></div>
                    </div>
                  </div>

                  <!--  Address job -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngày đăng</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="date" id="date" value="<?php echo set_value('date')?>" placeholder=" Ngày đăng">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('date')?></div>
                    </div>
                  </div>

                  <!-- Salary -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Hình ảnh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="picture" id="picture" value="<?php echo set_value('picture')?>" placeholder="Đường dẫn tới hình ảnh">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('picture')?></div>
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

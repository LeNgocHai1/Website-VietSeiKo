     <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        VIETSEIKO
        <small> Về VIETSEIKO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/gioi_thieu')?>"> Giới thiệu</a></li>
        <li class="active"> Thêm mới</li>
      </ol>
    </section>

    <section class="content-header">  
      <div class="row">
        <div class="box box-solid box-info"> 
          <?php $this->load->view('admin/gioithieu/head')?>
         
            <div class="col-sm-1"></div>
            <div class="col-md-10">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Thêm mới cẩm nang</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php admin_url('gioi_thieu/add')?>" method="post">
               
                <div class="box-body">
                  <div class="form-group">
                    <label for="username" class="col-sm-1 control-label">Tiêu đề</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title" id="title" value="<?php echo set_value('name')?>" placeholder=" Tiêu đề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('title')?></div>
                    </div>
                  </div>

                  
                   <div class="form-group ">
                    <label for="inputPassword3" class="col-sm-1 control-label"> Nội dung</label>                

                    <!-- /.box-header -->
                    <div class="col-sm-10">
                      
                      <textarea id="editor1" class="editor1" name="contents" rows="10" ></textarea>
                      

                      <span name="content_autocheck" class="autocheck"></span>
                <div name="re_password_error" class="clear error" style="color: red;"><?php echo form_error('contents')?></div>
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

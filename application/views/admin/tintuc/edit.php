     <!-- Content Header (Page header) -->
     
    <section class="content-header">
      <h1>
        Quản lý tin tức
        <small>Chỉnh sửa tin tức</small>
      </h1>
      <ol class="breadcrumb">
        
       <li><a href="<?php echo admin_url('tintucs')?>">Quản lý tin tức</a></li> 
        <li class="active"> Cập nhật tin tức</li>
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
                <h3 class="box-title"> Chỉnh sửa tin</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
            <form class="form-horizontal" action="#" method="post">
               
                <div class="box-body">
                  <!-- Company Name -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Tiêu đề</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nameNews" id="nameNews" value="<?php echo $infor->tieude?>" placeholder=" Tiêu đề">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('nameNews')?></div>
                    </div>
                  </div>
             

                  <!-- Descr 1 -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Nội dung</label>
                    <div class="col-sm-8">
                      <textarea  id="editor1" class="form-control"  name="descr_1" value="<?php echo $infor->descr_1?>" placeholder="Nội dung"><?php echo $infor->noidung?></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_1')?></div>
                    </div>
                  </div>

                    <!-- Descr 2 -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Mô tả</label>
                    <div class="col-sm-8">
                      <textarea  id="editor1" class="form-control"  name="descr_2" value="<?php echo $infor->descr_2?>" placeholder="Mô tả "><?php echo $infor->mota?></textarea>
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('descr_2')?></div>
                    </div>
                  </div>


                  <!-- Languages -->
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Ngày Đăng</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="date" id="date" value="<?php echo $infor->ngaydang?>" placeholder=" Ngày đăng">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('')?></div>
                    </div>
                  </div>
               <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"> Hình ảnh</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="picture" id="picture" value="<?php echo $infor->hinhanh?>" placeholder=" Hình ảnh">
                      <span name="name_autocheck" class="autocheck"></span>
                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('picture')?></div>
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                
               <div class="box-footer">                
                  <input type="submit" class="btn btn-info pull-right" value="Sửa">
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

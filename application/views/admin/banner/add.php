<section class="content-header">
      <h1>
        Quản lý banner
        <small>BANNER</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/banner')?>"> Quản lý banner </a></li> 
        <li><a href="<?php echo admin_url('admin/banner')?>">Thêm mới banner </a></li>       
      </ol>
    </section>

<section>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-solid box-info">
			<? $this->load->view('admin/banner/head')?>

			      <div class="col-sm-2"></div>
            		<div class="col-md-8">
            			 <div class="box box-info">
			              <div class="box-header with-border">
			                <h3 class="box-title"> Thêm ứng banner</h3>
			              </div>
						  <!-- form start -->
			              <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo admin_url('banner/add')?>" method="post">
			               
			                <div class="box-body">
			                	<div class="form-group">
				                    <label for="username" class="col-sm-3 control-label">Tên hình ảnh</label>
				                    <div class="col-sm-8">
				                      <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name')?>" placeholder="Tên hình ảnh">
				                      <span name="name_autocheck" class="autocheck"></span>
				                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
				                    </div>
				                  </div>

				                  <div class="form-group">
				                    <label for="username" class="col-sm-3 control-label"> Hình ảnh<span class="req">*</span></label>
				                    <div class="col-sm-8">
				                      <input type="file" class="form-control" name="image" id="img_link" value="<?php echo set_value('img_link')?>">
				                      <span name="name_autocheck" class="autocheck"></span>
				                      <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('img_link')?></div>
				                    </div>
				                  </div>
			                </div>
			                <div class="box-footer">                
			                  <input type="submit" class="btn btn-info pull-right" value="Thêm">
			                </div>
			            </form>

            		</div>
            	</div>
		</div>
	</div>
</div>
</section>
<section class="content-header">
      <h1>
        Quản lý HOTLINE
        <small> Số Hotline</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('hotline')?>"> Quản lý HOTLINE </a></li>        
      </ol>
    </section>
<section class="content">
  <div class="row">     
      <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Chỉnh sửa thông tin</h3>
            </div>
          <!-- /.box-header -->
          <!-- form start --> 
            <form class="form-horizontal" action="#" method="post">
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label"> Tên Công ty </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $info->name?>" >                    
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('name')?></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label"> Số điện thoại </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $info->phone?>">
                        
                        <span name="name_autocheck" class="autocheck"></span>
                        <div name="name_error" class="clear error" style="color: red;"><?php echo form_error('phone')?></div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="inputEmail3" value="<?php echo $info->email?>" >
                        <!-- <?php echo $row->email?> -->
                        <span name="Email_autocheck" class="autocheck"></span>
                         <div name="Email_error" class="clear error" style="color: red;"><?php echo form_error('email')?></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Địa chỉ</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="address" value="<?php echo $info->address?>" id="inputPassword3" >
                        <!-- <?php echo $row->address?> -->
                        <span name="password_autocheck" class="autocheck"></span>
                        <div name="password_error" class="clear error" style="color: red;"><?php echo form_error('address')?></div>
                      </div>
                    </div>                 
                    
                  </div>
                  <!-- /.box-body -->
                  
                 <div class="box-footer">        

                    <input type="submit" class="btn btn-info pull-right" value="Sửa" >
                                           
                  </div>
                  
                  <!-- /.box-footer -->
            </form>

           </div>
              <!-- /.box -->         
          
  </div>
        <!--/.col (right) -->    

</section>

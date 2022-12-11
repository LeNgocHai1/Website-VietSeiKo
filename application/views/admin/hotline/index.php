      
<section class="content-header">
      <h1>
        Quản lý HOTLINE
        <small> Số Hotline</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/admin')?>"> Quản lý HOTLINE </a></li>        
      </ol>
    </section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">  
      <div class="box box-solid box-info"> 
        <?php $this->load->view('admin/hotline/head')?>
       
          <div class="col-sm-1"></div>
          <div class="col-md-10">
                    
            

            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <!-- <h3 class="box-title">Thông tin</h3> -->

                      <!-- <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <?php foreach($list as $row):?>
                        <tr>
                          <!-- <th>ID</th> -->
                          <th> Tên công ty</th>
                          <th> Số điện thoại</th>
                          <!-- <th> Chỉnh sửa</th> -->
                          <th> Email</th>
                          <th> Địa chỉ</th>
                          <th>Hành động</th>
                        </tr>

                        <tr>
                          <!-- <td><?php echo $row->id?></td> -->
                          <td><?php echo $row->name?></td>
                          <td><?php echo $row->phone?></td>
                          <!-- <td></td> -->
                          <td><?php echo $row->email?></td>
                          <td><?php echo $row->address?></td>
                          <td class="option">
                             <a href="<?php echo admin_url('hotline/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                            <i class="fa fa-edit" style="margin-left: 20px;"></i>
                            </a> 
                          </td>                    
                        </tr>
                        <?php endforeach;?>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              
            </section>

                   
          
        </div>
        <!--/.col (right) -->
      </div>
    </div>
  </div>
</section>

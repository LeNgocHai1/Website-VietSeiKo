<section class="content-header">
      <h1>
        Quản lý quản trị viên
        <small> Quản trị viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/admin')?>"> Quản lý quản trị viên </a></li>        
      </ol>
    </section>
<section class="content">
  <div class="row">
      <div class="col-xs-12">
      	<div class="box box-solid box-info">
              
              <?php $this->load->view('admin/admin/head');?>
              <!-- <hr style="color: blue;font-size: 10px;"> -->
              <!-- <div class="line"></div> -->
              <!-- /.box-header -->
              <?php $this->load->view('admin/message',$this->data);?>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Họ và Tên</th>
                    <th>Tài khoản</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Ngày tạo</th> -->
                    <th>Hành động</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  <?php foreach ($list as $row):?>

                  <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->username?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->phone?></td>
                    <!-- <td><?php echo get_date($row->created)?></td> -->
                    <td class="option">
                       <a href="<?php echo admin_url('admin/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                      <i class="fa fa-edit" style="margin-left: 20px;"></i>
                      </a>                    
                      <a href="<?php echo admin_url('admin/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                        <i class="fa fa-trash " style="margin-left: 20px;"></i>
                      </a>
                    </td>
                  </tr>
                  
                  <?php endforeach;?>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th> Họ và Tên</th>
                    <th>Tài khoản</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th> Ngày tạo</th> -->
                    <th>Hành động</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
      </div>
      <!-- /.col -->
  </div>
  
</section>




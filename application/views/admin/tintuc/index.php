
<section class="content">

  <div class="row">
      <div class="col-xs-12">
      	<div class="box box-solid box-info">
              
              <?php $this->load->view('admin/tintuc/head');?>
              <!-- <hr style="color: blue;font-size: 10px;"> -->
              <!-- <div class="line"></div> -->
              <!-- /.box-header -->
              
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th> Tiêu đề</th>
                    <th> Mô tả</th>
                    <th> Hình ảnh</th>
                    <th> Ngày đăng</th>
                  </tr>
                  </thead>
                  <!-- <tfoot class="auto_check_pages">
                  <tr>
                    <td colspan="6">                      
                        
                         <div class="pagination">
                              <?php echo $this->pagination->create_links()?>
                          </div>
                    </td>
                  </tr>
                </tfoot> -->
                  <tbody>
                  <?php foreach ($list as $row):?>

                  <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->tieude?></td>
                    <td><?php echo $row->mota?></td>
                    <td><?php echo $row->hinhanh?></td>
                    <td><?php echo $row->ngaydang?></td>
                    <td class="option">
                       <a href="<?php echo admin_url('tintucs/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                      <i class="fa fa-edit" style="margin-left: 20px;"></i>
                      </a>                    
                      <a href="<?php echo admin_url('tintucs/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                        <i class="fa fa-trash " style="margin-left: 20px;"></i>
                      </a>
                    </td>
                  </tr>
                  
                  <?php endforeach;?>
                  </tbody>
                  
                  
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
      </div>
      <!-- /.col -->
  </div>
  
</section>

<script type="text/javascript">
 $(document).ready( function () {
   $('#example1').DataTable()
   $('#example2').DataTable({
     "order": [[ 0, "desc" ]]
  } );
} );
</script>


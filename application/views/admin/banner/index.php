<section class="content-header">
      <h1>
        Quản lý banner
        <small>BANNER</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo admin_url('online')?>"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo admin_url('admin/banner')?>"> Quản lý banner </a></li>        
      </ol>
    </section>


<section>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-solid box-info">
			<? $this->load->view('admin/banner/head')?>
        <?php $this->load->view('admin/message',$this->data);?>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên Banner</th>
                    <th>Hình ảnh</th>                
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  <?php foreach ($banner_list as $row):?>

                  <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->name?></td>
                    <td><img height="50" src="<?php echo base_url('upload/banner/'.$row->img_link)?>" ></td>                                      
                    <td><?php echo get_date($row->created)?></td>
                    <td class="option">
                       <a href="<?php echo admin_url('banner/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                      <i class="fa fa-edit" style="margin-left: 20px;"></i>
                      </a>                    
                      <a href="<?php echo admin_url('banner/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                        <i class="fa fa-trash " style="margin-left: 20px;"></i>
                      </a>
                    </td>
                  </tr>
                  
                  <?php endforeach;?>
                  </tbody>                  
                  
                </table>
				</div>
			</div>
		</div>



	</div>
</section>
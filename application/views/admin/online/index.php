<section class="content-header">
      <h1>
        <b>VIETSEIKO</b>.COM
        <small>Bảng quản trị</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <!-- <li class="active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $total?></h3>

              <p>Bài viết</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo admin_url('news')?>" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $customer_total?></h3>

              <p>Ứng Viên</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo admin_url('customer')?>" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">         

          <div class="box box-solid box-info"> 
            <div class="box-header">
              <h3 class="box-title">Danh sách Việc Làm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th> Chức danh</th>
                  <th> Địa điểm</th>
                  <th> Mức lương</th>
                  <th> Ngày đăng</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($list as $row):?>
                <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->nameNews?></td>
                  <td><?php echo $row->address?></td>
                  <td><?php echo $row->salary?></td>
                  <td><?php echo get_date($row->created)?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th> Chức danh</th>
                  <th>Địa điểm</th>
                  <th>Mức lương</th>
                  <th> Ngày đăng</th>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
<!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo public_url('admin/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Quản trị viên</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo admin_url('online')?>">
            <i class="fa fa-dashboard"></i> <span> Bảng điều khiển</span>
            <!-- <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span> -->
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-plus-circle"></i></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-plus-circle"></i></i> Dashboard v2</a></li>
          </ul> -->
        </li>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Quản lý banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('banner/add')?>"<i class="fa fa-plus-circle"></i></i> Tạo mới banner</a></li>
            <li><a href="<?php echo admin_url('banner')?>"><i class="fa fa-list-alt"></i></i>Danh sách banner</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span> Quản lý danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('category/add.php')?>"><i class="fa fa-plus-circle"></i></i> Tạo mới danh mục</a></li>
            <li><a href="<?php echo admin_url('category')?>"><i class="fa fa-list-alt"></i></i>Danh sách danh mục</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Quản lý bản tin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('news/add')?>"><i class="fa fa-plus-circle"></i></i> Tạo mới bản tin</a></li>
            <li><a href="<?php echo admin_url('news')?>"><i class="fa fa-list-alt"></i></i> Danh sách bản tin </a></li>           
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span> Quản lý tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('tintucs/add')?>"><i class="fa fa-plus-circle"></i></i> Tạo mới tin tức</a></li>
            <li><a href="<?php echo admin_url('tintucs')?>"><i class="fa fa-list-alt"></i></i> Danh sách tin tức </a></li>           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span> Ban quản trị viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('admin/add')?>"><i class="fa fa-plus-circle"></i></i> Tạo mới BQT</a></li>
            <li><a href="<?php echo admin_url('admin')?>"><i class="fa fa-list-alt"></i></i> Danh sách BQT</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span> Quản lý ứng viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo admin_url('customer/add')?>"><i class="fa fa-plus-circle"></i></i> Tạo mới ứng viên</a></li>
            <li><a href="<?php echo admin_url('customer')?>"><i class="fa fa-list-alt"></i></i> Danh sách ứng viên</a></li>
          </ul>
        </li>
         <li>
          <a href="<?php echo admin_url('camnang')?>">
            <i class="fa fa-calendar"></i> <span>Cẩm nang</span>            
          </a>
        </li>
        <li>
          <a href="<?php echo admin_url('hotline')?>">
            <i class="fa fa-volume-control-phone"></i> <span>HOTLINE</span>            
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>">
            <i class="fa fa-user"></i> <span>Trang người dùng</span>            
          </a>
        </li>
        
        
        
      </ul>
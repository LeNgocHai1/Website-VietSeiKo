<div class="nguoitimviec" >
    <div class="find-job">
            <div class="row">
                <div class="col-sm-4" style="color: white;">
                    TÌM VIỆC LÀM
                </div>
                <div id="tvn" class="col-sm-4"  style="color: white;">
                    TẠI VIỆT NAM
                </div>
                <div id="tnb" class="col-sm-4"  style="color: white;">
                    TẠI NHẬT BẢN
                </div>
            </div>

                <div class="row">
                    <div class="col-sm-4">
                    <!-- Default input -->
                        <input style="height: 30px;" type="text" id="exampleForm2" class="form-control mb-3" placeholder="Lập trình viên, giám đốc, trường phòng">
               
                        
                    </div>
                    <div class="col-sm-4">
                        <select class="mdb-select md-form mb-3" searchable="Search here.." style="width: 100%;">
                            <option value="" disabled selected>Chọn nên làm việc tại Việt Nam</option>
                            <option value="1">Tất cả địa điểm</option>
                            <option value="2">Hồ Chí Minh</option>
                            <option value="3">Hà Nội</option>
                            <option value="4">An Giang</option>
                            <option value="5">Bà Rịa - Vũng Tàu</option>
                            <option value="6">Đồng Nai</option>
                            <option value="7">Bình Dương</option>

                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="mdb-select md-form mb-3" searchable="Search here.." style="width: 100%;">
                            <option value="" disabled selected>Chọn nơi làm việc tại Nhật</option>
                            <option value="1">Tất cả địa điểm</option>
                            <option value="2">Aichi</option>
                            <option value="3">Akita</option>
                            <option value="4">Aomori</option>
                            <option value="5">Chiba</option>
                        </select>
                    </div>
                </div>


            <div class="row">
                <div class="col-sm-8">
                <select class="browser-default custom-select custom-select-lg mb-3">
                    <option selected>Chọn ngành nghề mong muốn</option>
                    <option value="1">Tư vấn</option>
                    <option value="2">Xây dựng</option>
                    <option value="3">Công nghệ thông tin</option>
                </select>

                </div>
                <div class="col-sm-4">
                    <select style="width: 100%;" class="mdb-select md-form" searchable="Search here..">
                            <option value="" disabled selected>Mức lương mong muốn</option>
                            <option value="1">Tất cả mức lương</option>
                            <option value="2">$300-$500</option>
                            <option value="3">$500-$800</option>
                            <option value="3">$800-$1200</option>
                            <option value="3">$1200-$2000</option>
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"  style="color: white;">
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <form class="form-inline mr-auto">
                        <button style="background: #e2b900; color: white; width: 100%; height: 33px;" href="#!" class=" fa fa-search btn btn-outline-green btn-md my-0 ml-sm-2" type="submit"> TÌM NGAY</button>
                    </form>
                </div>



            </div>
    </div>
    <br>
    <div class="find-result">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-info">
                <div class="box-header">
                    KẾT QUẢ TÌM KIẾM
                </div>
                <!-- /.box-header -->           
        
                <div>	
                    <div class="list-group list-search-result-group tlp headline">
                        <?php foreach ($list as $row):?>
                            <?php if (str_word_count($row->address) == 1) { ?>
                                        <div class="list-group-item">
                                <p class="ribbon ribbon-danger">NEW</p>
                                <h2 class="list-group-item-heading">
                                        <a target="_blank" href="<?php echo base_url('user/news/detail/'.$row->id)?>"><?php echo $row->nameNews?></a>
                                </h2>
                                
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="#"><?php echo $row->infoCPN?></a>
                                        -
                                        <a href="#" title="View Jobs at Location: Hà Nội"><?php echo $row->address?></a>                                                                            
                                    </p>
                                    <div class="pull-left">
                                        <small>
                                    <?php echo $row->salary?>
                                        |                                                     Nhân viên                                                
                                        </small>
                                    </div>
                                    <p class="date pull-right"><small><?php echo $row->receipt?></small></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            
                        <?php endforeach;?>   
                            
                    </div>
                </div>
        

                <!-- /.box-body -->
                

            </div>
            <!-- /.box -->	

            </div>
            <!-- /.col -->
        </div>
    </div>


        

</div>
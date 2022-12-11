    <style>
        .banner{
            display: none;
        }
.filter{
    font-family: inherit;
    background-color: #fff;
    z-index: 100;
    top: 0;
    position: sticky;
    box-shadow: rgb(0 0 0 / 8%) 0px 1px 12px !important;
}
.dropdown-toggle{
    font-size: 15px;
    transition: 0.2s;
    border-radius: 50px;
    background-color: #E8F1F5;
}
.root-0-2-4 > *:not(:first-child){
    margin-left: 0.5rem;
}
#search_filters_container .dropdown-menu {
    min-width: 320px;
    max-width: 360px;
    box-shadow: 0px 4px 12px rgb(0 0 0 / 15%);
    border-radius: 8px;
    margin-top: 0.5rem;
}
.dropdown input[type="seach"]{
    padding-left: 30px;
}
.dropdown label{
    margin-bottom: 0;
}
.input-with-icon .input-icon{
    position: absolute;
    top: 28px;
    left: 28px;
    font-size: 14px;
}
.dropdown-menu{
    padding: 0;
}
.c1-select--item input{
    width: 24px;
    height: 24px;
    cursor: pointer;
    min-width: 24px;
}
.c1-select--menu{
    overflow: auto;
    max-height: 44vh;
}
.c1-select--item{
    display: flex;
    font-size: 15px;
    align-items: center;
    padding: 0.5rem 1.25rem;
}
.cl-select--menu--footer{
    bottom: 0;
    display: flex;
    padding: -1.5rem;
    position: sticky;
    justify-content: flex-end;
    background-color: white;
    border-top: 1px solid #D7D7DB;
}
.cl-select--btn__reset,
.cl-select--btn__reset:hover{
    color: red;
    font-weight: 100;
}
.row a{
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
}
.row .updata a{
    z-index: 99;
    padding: 11px;
    font-size: 15px;
    font-weight: 400;
}
.info{
    height: auto;
    border-radius: 10px;
    background: #f5fcff;
}
.info:hover{
    box-shadow: 0px 4px 12px rgb(0 0 0 / 15%);
}
.avata{
    display: flex;
    align-items: center;
    background: white;
    border: 1px solid #D7D7DB !important;
}
.avata img{
    width: 100%;
}

.info_detail p{
    line-height: 13px;
    color: rgba(0, 0, 0, 0.5);
}
.info_detail h3{
    color: #1e4da1;
}
.n2{
    width: 83%;
}

 /* Tuyển dụng Vietseiko */
 .workvietseiko_title{
    background-color: rgba(118, 184, 0, 0.7);
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
 }
 .workvietseiko_title-n1{
     text-align: center;
 }
 .media_tuvannhansu{
    margin-top: 59px;
 }
 .table-hover tbody tr td{
    font-family: 'Tinos', serif;
    font-size: 18px;
    line-height: 28px;
    border-bottom: 1px solid antiquewhite;
 }

.table-hover tbody tr:hover td, .table-hover tbody tr:hover a {
  background-color: green;
  color: white;
}
.license1{
    background: url(https://esuhai.com/statics/asset/default/images/icon/frame-top-trans.png);
    width: 372px;
    height: 50px;
    background-size: 386px 50px;
}
.license2{
    background: url(https://esuhai.com/statics/asset/default/images/icon/frame-repeat-trans.png);
    width: 372px;
    background-size: 386px;
}
.license2 img{
    padding-left: 23px;
    width: 346px;
    margin-top: -17px;
}
.license3{
    background: url(https://esuhai.com/statics/asset/default/images/icon/frame-bot-trans.png);
    width: 366px;
    height: 24px;
    background-size: 385px;
}
.new_hot-item-info{
    width: 60%;
    padding: 10px;
}
.new_hot-item-info a,
.new_hot-item-info a:hover{
    color: black;
}
.new_hot-item-nb{
    padding: 30px;
}
.new_hot-item-nb a{
    padding: 7px 77px;
    border: 2px solid #287ab9;
    border-radius: 5px;
    text-transform: uppercase;
    width: 100%;
}
.news_navbar{
    margin-top: 5%;
    float: right;
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
    border-radius: 10px;
    background-color: #1e4da1;
}
.news_hot{
    width: 372px;
}
.news_hot-nb,
.news_hot-item{
    background-color: white;
}
 .news_hot-item-img img{
    width: 100%;
}
.news_hot-title{
    color: white;
    padding-left: 10px;
}
.news_hot-item{
    display: flex;
    position: relative;
}
.news_hot-item-img{
    width: 40%;
    padding: 10px;
}
.news_hot-item::after{
    content: "";
    bottom: 0;
    height: 1px;
    width: 90%;
    background-color: #f5f5f5;
    position: absolute;
    left: 5%;
}
 /* responsive  */
 @media (max-width: 739px){
    .filter{
        display: none;
    }
    .media_tuvannhansu{
        margin-top: 100px;
    }
    .info_detail p{
        line-height: 18px;
        margin-bottom: 5px;
    }
    .vietseiko{
        margin-right: 0%;
    }
    .n1{
        flex-wrap:inherit;
        padding: 0.3rem !important;
    }
    .avata{
        width: 8rem;
        height: 6em;
        padding: 0 !important;
        margin-top: 20px;
        
    }
    .info_detail{
        padding-right: 0 !important;
        margin-top: -15px;
    }
    .info_detail h3{
        font-size: 17px;
    }
    .workvietseiko_title{
        width: 100%;
    }
    .vieclamgap_left{
        margin-left: -9px;
    }
	.row a{
        font-size: 17px;
    }

 }
    </style>


<div class="media_tuvannhansu" >
     <div class="filter mb-5">
        <div class="container" data-turbolinks-permanent id="search_filters_container">
            <div class="d-flex flex-1 pb-2 pt-1">
                <div class="container-0-2-6">
                    <div class="d-flex p-1 root-0-2-4" style="margin-left: 0px;">
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-th-large mr-2"></i>
                                Ngành nghề
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <div class="sticky-top bg-white pt-3 px-3 pb-1">
                                    <div class="input-with-icon">
                                        <i class="fas fa-search text-primary input-icon"></i>
                                        <input type="seach" class="form-control" value="">
                                    </div>
                                </div>
                                <button class="dropdown-item c1-select--item pt-2">
                                    <input id="job1" type="checkbox" class="mr-2" readonly>
                                    <label for="job1">An Ninh / Bảo Vệ</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="job2" type="checkbox" class="mr-2" readonly>
                                    <label for="job2"> An Toàn Lao Động</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="job3" type="checkbox" class="mr-2" readonly>
                                    <label for="job3"> Biên phiên dịch (tiếng Nhật)</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="job4" type="checkbox" class="mr-2" readonly>
                                    <label for="job4"> Biên phiên dịch / Thông dịch viên</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="job5" type="checkbox" class="mr-2" readonly>
                                    <label for="job5"> Bán hàng</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="job6" type="checkbox" class="mr-2" readonly>
                                    <label for="job6"> Bất động sản</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-layer-group mr-2"></i>
                                Cấp bậc 
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item c1-select--item">
                                    <input id="lever1" type="checkbox" class="mr-2" readonly>
                                    <label for="lever1">Thực Tập</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="lever2" type="checkbox" class="mr-2" readonly>
                                    <label for="lever2"> Mới Đi Làm</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="lever3" type="checkbox" class="mr-2" readonly>
                                    <label for="lever3"> Nhân Viên</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="lever4" type="checkbox" class="mr-2" readonly>
                                    <label for="lever4"> Trưởng Phòng \ Quản Lý</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="lever5" type="checkbox" class="mr-2" readonly>
                                    <label for="lever5"> Giám Đốc</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-clock mr-2"></i>
                                Kinh nghiệm
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item c1-select--item">
                                    <input id="epx1" type="checkbox" class="mr-2" readonly>
                                    <label for="epx1">Duới 1 năm</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="epx2" type="checkbox" class="mr-2" readonly>
                                    <label for="epx2">1 - 2 năm</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="epx3" type="checkbox" class="mr-2" readonly>
                                    <label for="epx3">2 - 5 năm</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="epx4" type="checkbox" class="mr-2" readonly>
                                    <label for="epx4">5 - 10 năm</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="epx5" type="checkbox" class="mr-2" readonly>
                                    <label for="epx5">Trên 10 năm</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-graduation-cap mr-2"></i>
                                Học vấn
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item c1-select--item">
                                    <input id="deg1" type="checkbox" class="mr-2" readonly>
                                    <label for="deg1">Trung câp</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="deg2" type="checkbox" class="mr-2" readonly>
                                    <label for="deg2">Cao đẳng/Đại học</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="deg3" type="checkbox" class="mr-2" readonly>
                                    <label for="deg3">Thạc sĩ</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="deg4" type="checkbox" class="mr-2" readonly>
                                    <label for="deg4">Tiến sĩ</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-briefcase mr-2"></i>
                                Loại công việc
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item c1-select--item">
                                    <input id="time1" type="checkbox" class="mr-2" readonly>
                                    <label for="time1">Toàn thời gian</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="time2" type="checkbox" class="mr-2" readonly>
                                    <label for="time2">Bán thời gian</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="time3" type="checkbox" class="mr-2" readonly>
                                    <label for="time3">Thời vụ</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown c1-select">
                            <button type="button" class="btn btn-block text-truncate dropdown-toggle cl-select--toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Đăng trong
                            </button>
                            <div class="dropdown-menu c1-select--menu pt-0" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item c1-select--item">
                                    <input id="day1" type="checkbox" class="mr-2" readonly>
                                    <label for="day1">Hôm nay</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="day2" type="checkbox" class="mr-2" readonly>
                                    <label for="day2">3 ngày</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="day3" type="checkbox" class="mr-2" readonly>
                                    <label for="day3">1 tuần</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="day4" type="checkbox" class="mr-2" readonly>
                                    <label for="day4">2 tuần</label>
                                </button>
                                <button class="dropdown-item c1-select--item">
                                    <input id="day5" type="checkbox" class="mr-2" readonly>
                                    <label for="day5">1 tháng</label>
                                </button>
                                <div class="cl-select--menu--footer" onclick="clearFilter()">
                                    <button class="btn btn-link cl-select--btn__reset" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                        Xoá Lọc
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 float-left">
                    <h3>VIỆC LÀM CẦN TUYỂN</h3>

               <?php 
                    $sum=0;
                    foreach ($list as $row):
                        $time_now = strtotime("now");
                        $job_deadline = strtotime($row->receipt);
                        if ($time_now <= $job_deadline) {
                            $sum += 1;
                        }
                    endforeach;
               ?>

                    <!-- <span><?php echo $sum;?> việc làm</span> -->
                    <span>Hơn 503 việc làm</span>
                </div>
                <div class="col-sm-3 float-right dropdown">
                        Sắp xếp 
                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mới cập nhật
                        </a>
                    <div class="dropdown-menu updata" aria-labelledby="dropdownMenuLink">
                        <a href="#" class="dropdown-item">Mới cập nhật</a>
                        <a href="#" class="dropdown-item">Mới đăng</a>
                        <a href="#" class="dropdown-item">Sắp hết hạn</a> 
                    </div>
                </div>
            </div>




            <div class="col-sm-9 float-left">



               <?php foreach ($list as $row) {

                $time_now = strtotime("now");
                $job_deadline = strtotime($row->receipt);
                if ($time_now) {
                    echo '<div class="row border border-primary info p-4 mt-3 n1">';
                    echo '<div class="col-sm-2 avata">';
                    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRINpQW1MKYXjZSeh0gSL9Y0msOGmy1jcJNQ&usqp=CAU" alt="">';
                    echo '</div>';
                    echo '<div class="n2">';
                    echo '     <div class="col-sm-8 info_detail">';
                    echo '       <a href="';
                    echo base_url('user/news/detail/'.$row->id);
                    echo '"><h3>';
                    echo $row->nameNews;
                    echo '</h3></a>';
                    echo '       <p>Số lượng: ';
                    echo $row->staffNumber;
                    echo ' người</p>';
                    echo '      <p class="fas fa-map-marker-alt"> ';
                    echo $row->address;
                    echo '</p>';
                    echo '            <p><a style="font-size:14px" class="fas fa-dollar-sign" > ';
                    echo $row->salary;
                    echo ' </a> | ';
                    echo $row->infoCPN;
                    echo '</p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } ?>  

               <div class="pagination col-sm-9 float-left" >
                    <?php echo $pagination; ?>
                </div> 
            </div>


            <div class="row border-primary col-sm-3 mt-3 mb-3 float-right " style="padding: 0;">
                <div class="vieclamgap_left">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="license">
                                <div class="license1"></div>
                                <div class="license2">
                                    <img src="https://anhdepfree.com/wp-content/uploads/2021/03/hinh-anh-nui-phu-si-nhin-tu-xa-41965.jpg">
                                </div>
                                <div class="license3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin tức nổi bật  -->
                <div class="news_navbar" id="new_hot">
                      <div class="news_hot">
                          <div class="news_hot-title">
                              <h3>TIN TỨC NỔI BẬT</h3>
                          </div>
                      <?php foreach ($list_news as $row): ?>

                          <div class="news_hot-item">
                              <div class="news_hot-item-img">
                                  <img src="<?php echo $row->hinhanh?>" alt="">
                              </div>
                              <div class="new_hot-item-info">
                                  <h6> 
                                            <a href="<?php echo base_url('user/tintuc/detail/'.$row->id)?>"><?php echo $row->tieude ?></a>

                                  </h6>
                              </div>
                          </div>
                      <?php endforeach; ?>


                      </div>
            </div>
            </div>
        </div>
    </div>

    <Script>
        showFilter
        $('.dropdown-item').on('click', function (event) {
            $(this).parent().toggleClass('show');
        });
        // clearFilter
        function clearFilter(){
            var inputElement = document.querySelectorAll('input[type="checkbox"]');
            for (var i =0; i<inputElement.length; i++){
                inputElement[i].checked = false;
            }
        }
        //Range
        var inputLeft = document.getElementById("input-left");
        var inputRight = document.getElementById("input-right");

        var thumbLeft = document.getElementById("track > .thumb.left");
        var thumbRight = document.getElementById("track > .thumb.right");
        var range = document.getElementById("track > .track_range");

        function setLeftValue(){
            var _this = inputLeft,
                min = parseInt(_this.min),
                max = parseInt(_this.max);

            _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

            var percent = ((_this.value - min)/(max-min))*100;
            thumbLeft.style.left = percent + "%";
            range.style.left = percent + "%";
        }
        inputLeft.addEventListener("input", setLeftValue);

    </Script>
</div>






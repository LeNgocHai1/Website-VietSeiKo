
<script>
function openVieclam(evt, address) {
  var i, x, tablinks;
  x = document.getElementsByClassName("congviec");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" colors", "");
  }
  document.getElementById(address).style.display = "block";
  evt.currentTarget.className += " colors ";

  /* code javastr phần đối tác */
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector("ul.marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for(let i=0; i<marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
}
</script>

<style type="text/css">

:root {
  --marquee-width: 80vw;
  /* --marquee-elements: 12; */ /* defined with JavaScript */
  --marquee-elements-displayed: 5;
  --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
  --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
}

a {
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
  }
  li {
    color: #000;
  }
  p{
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
  }
/* body  */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


html{
    scroll-behavior: smooth;
    font-family: Arial, Helvetica, sans-serif;
}
/* content  */

a:hover{
    text-decoration: none;
}
.box-avata{
    width: 65px;
    float: left;
}
.box-content{
  margin:24px;
}
figure img{
    width: 100%;
}
.dola::before{
    content: '\f155';
    font-size: 17px;
    font-family: FontAwesome;
}
.box-content ul{
    list-style: none;
    font-weight: 300;
}
.plus_add{
    border: 1px solid #1f4da2  !important;
    width: 174px;
    padding: 13px;
    color: #28a745;
    font-size: 20px
}
.plus_add:hover{
    background-color: #1E4DA1;
    color: white !important;    
}
.colors{
    background-color: #1E4DA1 !important;
    color: white !important;
}
.color{
    background-color: #eaeaea;
    color: black;
}
.color:hover{
    background-color: #1E4DA1;
}
/* button top */
.btn-top {
    background-image: url(<?php echo base_url()?>public/user/img/icon-top3.jpg);
    background-repeat: no-repeat;
    border: medium none;
    bottom: 100px;
    cursor: pointer;
    display: none;
    height: 90px;
    outline: medium none;
    padding: 0;
    position: fixed;
    right: 20px;
    width: 40px;
    z-index: 9999;
}
/* Hiệu ứng phần code hoạt động */
@import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);
figure.snip0016 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  max-height: 320px;
  width: 100%;
  background: #000000;
  text-align: left;
}
figure.snip0016 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
figure.snip0016 img {
  opacity: 1;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}
figure.snip0016 figcaption {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 30px 3em;
  width: 100%;
  height: 100%;
}
figure.snip0016 figcaption::before {
  position: absolute;
  top: 30px;
  right: 30px;
  bottom: 30px;
  left: 100%;
  border-left: 4px solid rgba(255, 255, 255, 0.8);
  content: '';
  opacity: 0;
  background-color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  -webkit-transition-delay: 0.6s;
  transition-delay: 0.6s;
}
figure.snip0016 h2,
figure.snip0016 p {
  margin: 0 0 5px;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s,-webkit-transform 0.35s,-moz-transform 0.35s,-o-transform 0.35s,transform 0.35s;
}
figure.snip0016 h2 {
  word-spacing: -0.15em;
  font-weight: 300;
  text-transform: uppercase;
  -webkit-transform: translate3d(30%, 0%, 0);
  transform: translate3d(30%, 0%, 0);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
figure.snip0016 h2 span {
  font-weight: 800;
}
figure.snip0016 p {
  font-weight: 200;
  -webkit-transform: translate3d(0%, 30%, 0);
  transform: translate3d(0%, 30%, 0);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
figure.snip0016 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  color: #ffffff;
}
figure.snip0016:hover img {
  opacity: 0.3;
}
figure.snip0016:hover figcaption h2 {
  opacity: 1;
  -webkit-transform: translate3d(0%, 0%, 0);
  transform: translate3d(0%, 0%, 0);
  -webkit-transition-delay: 0.4s;
  transition-delay: 0.4s;
}
figure.snip0016:hover figcaption p {
  opacity: 0.9;
  -webkit-transform: translate3d(0%, 0%, 0);
  transform: translate3d(0%, 0%, 0);
  -webkit-transition-delay: 0.6s;
  transition-delay: 0.6s;
}
figure.snip0016:hover figcaption::before {
  background: rgba(255, 255, 255, 0);
  left: 30px;
  opacity: 1;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

/* Hiệu ứng phần code đối tác */

.marquee {
  width: var(--marquee-width);
  height: var(--marquee-height);
  color: #eee;
  overflow: hidden;
  position: relative;
}
.marquee:before, .marquee:after {
  position: absolute;
  top: 0;
  width: 10rem;
  height: 100%;
  content: "";
  z-index: 1;
}
.marquee:before {
  left: 0;
  background: linear-gradient(to right, 0%, transparent 100%);
}
.marquee:after {
  right: 0;
  background: linear-gradient(to left, 0%, transparent 100%);
}
.marquee-content {
  list-style: none;
  height: 100%;
  display: flex;
  animation: scrolling var(--marquee-animation-duration) linear infinite;
}
/* .marquee-content:hover {
  animation-play-state: paused;
} */
@keyframes scrolling {
  0% { transform: translateX(0); }
  100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
}
.marquee-content li {
  display: flex;
  justify-content: center;
  align-items: center;
  /* text-align: center; */
  flex-shrink: 0;
  width: var(--marquee-element-width);
  max-height: 100%;
  font-size: calc(var(--marquee-height)*3/4); /* 5rem; */
  white-space: nowrap;
}

.marquee-content li img {
  width: 100%;
  /* height: 100%; */
  border: 2px solid #eee;
}

@media (max-width: 600px) {
  html { font-size: 12px; }
  :root {
    --marquee-width: 100vw;
    --marquee-height: 16vh;
    --marquee-elements-displayed: 3;
  }
  .marquee:before, .marquee:after { width: 5rem; }
}
    /* Hiệu ứng hover zoom hình ảnh ở phần tin tức */
    .noidung {

      overflow: hidden;
    }
    .zoom_color img {
      transition: transform .5s, filter 1.5s ease-in-out;
    }
    .zoom_color img:hover {
      filter: grayscale(0);
      transform: scale(1.1);
    }
    .table_1 thead tr .nhh{
        padding-left: 200px;
    }
    #job .nhh {
        padding-left: 200px;
    }

    /* CSS hoạt động */
    .hoat_dong {
        border: 1px solid #ccc;
        border-radius: 20px;
        padding-top: 50px;
    }

    /* ******************* hero right side ************** */

.rounded {
    border-radius: 10px !important;
}

.bordered {
    border: 1px solid #ebebeb;
}

.post-tabs {
    padding: 30px;
}

.post-tabs .tab-content {
    margin-top: 30px;
}

.nav-tabs {
    border-bottom: 0;
}

.tab-content {
    position: relative;
}

.tab-pane {
    opacity: 1;
    transition: all 0.3s ease-in-out;
}

.tab-pane.loading {
    opacity: 0.3;
}

.lds-dual-ring {
    display: inline-block;
    position: absolute;
    right: 40px;
    height: 40px;
    top: 50%;
    left: 50%;
    visibility: hidden;
    opacity: 0;
    transform: translate(-50%, -50%);
    transition: all 0.2s ease-in-out;
    z-index: 1;
}

.lds-dual-ring.loading {
    visibility: visible;
    opacity: 1;
}

.lds-dual-ring::after {
    content: " ";
    display: block;
    width: 40px;
    height: 40px;
    margin: 8px;
    border-radius: 50%;
    border: 3px solid;
    border-color: #ad1deb transparent #ad1deb transparent;
    animation: lds-dual-ring 1.2s linear infinite;
}

@keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.nav-fill .nav-item, .nav-fill>.nav-link {
    margin-right: 10px;
}

.nav-fill .nav-item:last-child, .nav-fill>.nav-link:last-child {
    margin-right: 0;
}

.nav-fill .nav-item>.nav-link {
    color: #8f9bad !important;
    margin-right: 10px;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff !important;
    background-color: #6e72fc;
    background-image: linear-gradient(315deg, #6e72fc 0%, #ad1deb 74%);
    border-color: transparent;
    background-size: 200% auto;
}

.nav-pills .nav-link {
    background: 0 0;
    border: 1px solid #ebebeb;
    border-radius: 30px;
}

.post.post-list-sm {
    clear: both;
}
.post .meta li {
    font-size: 12px;
    padding-left: 20px;
    color: #9faabb;
    margin-top: 7px;
}
.list-inline {
    padding-left: 0;
    list-style: none;
}
.clearfix .post-title a {
    color: #000;
    font-size: 15px;
    padding-left: 20px;
    font-family: 'Poppins', sans-serif;
    outline: 0;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
}

.featured-post-lg {
    margin-top: 50px;
}

.clearfix .post-title a:hover {
    color: #ad1deb;
}

.post.post-list-sm.circle .thumb {
    max-width: 140px;
}

.post.post-list-sm.circle .details {
    margin-left: 80px;
}

.post.post-list-sm .thumb {
    float: left;
    position: relative;
}

.post .thumb {
    position: relative;
}

.post .thumb.rounded .inner {
    border-radius: 10px;
    overflow: hidden;
}

.post .thumb.circle .inner {
    box-shadow: 0 8px 20px rgb(32 54 86 / 30%);
    border-radius: 50%;
}

.post.post-list-sm .post-title {
    font-size: 15px;
}

.post.post-list-sm::after {
    content: "";
    display: block;
    height: 1px;
    margin-bottom: 20px;
    margin-top: 20px;
    width: 100%;
    background: #ebebeb;
    background: linear-gradient(to left, #ebebeb 0%, transparent 100%);
}

.post.post-list-sm:last-child::after {
    content: "";
    display: none;
}


</style>

    <!-- link javaScript page fb -->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=623008085835933&autoLogAppEvents=1" nonce="dI1HFeS0"></script>

   <!--  Chức năng btn top   -->
    <div class="footer"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>
    

<div class="container">
    <div style="text-align: center;font-size: 30px; padding-top: 20px;color: #000;">
        <strong>VIỆC LÀM TIẾNG NHẬT CẦN TUYỂN</strong>
        <br>

    </div>
    <div class="table-wrapper">

 <div class="table-wrapper-center">
            <div class="w3-bar w3-Aqua">
                <div class="row"> 
                    <div class="col-sm-4 vn" style="padding: 1px;">
                        <button  style="padding:0px; width: 100%;height: 100%;" class=" w3-button tablink w3-bar-item color colors" onclick="openVieclam(event,'vltvn')">
                            <!-- <div class="row"> -->
                                <!-- <div class="col-sm-3">
                                    <img style="height: 76px;" src="<?php echo base_url()?>public/user/img/flag_vn.png" >
                                </div> -->
                                <!-- <div class="col-sm"> -->
                                    <h3 class="title_vn">
                                    VIỆC LÀM TẠI VIỆT NAM
                                    </h3>
                                <!-- </div>                            -->
                            <!-- </div> -->
                        </button>
                    </div>
                    <div class="col-sm-4 nb" style="padding: 1px;">
                        <button style="padding:0px; width: 100%; height: 100%" class=" w3-button tablink color" onclick="openVieclam(event,'vltn')">
                                <!-- <div class="col-sm-3 ">
                                    <img class="flag_nb" src="<?php echo base_url()?>public/user/img/flag_nb.jpg" >
    
                                </div> -->
                                    <h3 class="title_nb">
                                    XKLĐ NHẬT BẢN
                                    </h3>
                        </button>
                    </div>
                    <div class="col-sm-4 ks" style="padding: 1px;">
                        <button style="padding:0px; width: 100%; height: 100%" class=" w3-button tablink color" onclick="openVieclam(event,'vlks')">
                            <div class="row" id="flag_nhatban">
                                <!-- <div class="col-sm-3 ">
                                    <img class="flag_nb" src="<?php echo base_url()?>public/user/img/flag_nb.jpg" >
    
                                </div> -->
                                <div class="col-sm">
                                    <h3 class="title_ksnb">
                                    KỸ SƯ & THÔNG DỊCH VIÊN<br> TẠI NHẬT BẢN
                                    </h3>
                                </div>                  
                            </div>
                        </button>
                    </div>
                     
                </div>
            </div>
            <div id="vltvn" class="congviec" >
               <div id="ajax_content">
                     <?php $this->load->view('user/home/data');?>
                </div>
            </div>
            <div id="vltn" class="congviec" style="display:none;">
                <table class="table_1 table-stripe table-hover" style="color: #000;">
                    <thead>
                        <tr>
                            <th>Việc làm</th>
                            <th>Mức lương</th>
                            <th class="kv">Khu vực</th>
                            <th class="nhh">Ngày hết hạn</th>
    
                        </tr>
                    </thead>
                    <tbody>
                      <?php  foreach($list as $row  ): ?>
                          <?php if (str_word_count($row->address) == 1) { ?>
                            <tr id="job">
                             
                                <td> 
                                <a target="_blank" href="<?php echo base_url('user/news/detail/'.$row->id)?>"><?php echo $row->nameNews?></a>
                            </td>
                            <td><?php echo $row->salary?></td>
                            <td><?php echo $row->address?></td> 
                            <td class="nhh"><?php echo $row->receipt?></td>
                        </tr>
                        <?php } ?>
                        <?php endforeach;?>      
                    </tbody>
                </table>
            </div>
            
            
        </div>   




       <div class="table-wrapper-footer">
            
            <div class="inforFooter">
            <div class="inforFooter_left">
                <img src="https://vietseiko.com/public/user/img/container-top/background_cv1.png" alt="">
                <div class="inforFooter_left-child">
                    <i class="fas fa-arrow-circle-right"></i>
                    <div class="inforFooter_left-child-1">
                        <div>
                        <strong>THÔNG TIN</strong></div>
                        <div style="text-indent: 40px;">
                        <strong>LIÊN HỆ:</strong></div>
                    </div>
                </div>
                <div class="inforFooter_left-text">
                    <strong>CÔNG TY TNHH VIETSEIKO<br>
                    * Website: www.vietseiko.com <br>* Hotline: (028) 3636.9996 <br>
                    * Email: tuyendungjapan@vietseiko.com <br>
                    * Địa chỉ: 108/17, Đường 79, Phường Tăng Nhơn Phú B, TP.Thủ Đức, TP.HCM</strong>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>




  <section>
      
      <div class="container-fuil">
        <div class="container-fuil-bg"></div>
        <div style="text-align: center;font-size: 30px;margin-bottom: -100;color: #000;">
            <strong>VIỆC LÀM TUYỂN GẤP</strong>
            <br><br> 
        </div>
        <div class="container">
            
            <div class="row p-3">
                <div class="col-sm-12">
                    <div class="row" style="color: #000;">
                        <?php for ($i=0 ; $i<2 ; $i++) {?>
                        
                        <div class="col-sm-6">
                           <div class="border border-top-0 border-left-0 border-right-0 m-3" id="job_hot">
                                <div class="box-avata">
                                    <figure>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRINpQW1MKYXjZSeh0gSL9Y0msOGmy1jcJNQ&usqp=CAU" alt="">
                                    </figure>
                                </div>
                                <div class="box-content">
                                     <a href="<?php echo base_url('user/news/detail/'.$jobs_VN[$i]->id); ?>" style="font-size: 18px; color: #1e4da1">
                                        <?php echo $jobs_VN[$i]->nameNews;?>
                                    </a>
                                    <a href="#"class="text-secondary" style="font-size: 16px;">
                                        Số lượng: <?php echo $jobs_VN[$i]->staffNumber; ?> người
                                    </a>
                                    <ul class="row">
                                        <li class="dola float-left col-sm-6">
                                            <?php echo $jobs_VN[$i]->salary; ?>
                                        </li>
                                        <li class="col-sm-6 fas fa-map-marker-alt">
                                            <?php echo $jobs_VN[$i]->address; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                       
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row" style="color: #000;">

                           <?php for ($i=2 ; $i<4 ; $i++) {?>
                        <div class="col-sm-6">
                            <div class="border border-top-0 border-left-0 border-right-0 m-3" id="job_hot">
                                <div class="box-avata">
                                    <figure>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRINpQW1MKYXjZSeh0gSL9Y0msOGmy1jcJNQ&usqp=CAU" alt="">
                                    </figure>
                                </div>
                                <div class="box-content">
                                     <a href="<?php echo base_url('user/news/detail/'.$jobs_VN[$i]->id); ?>" style="font-size: 18px; color: #1e4da1">
                                        <?php echo $jobs_VN[$i]->nameNews;?>
                                    </a>
                                    <a href="#"class="text-secondary" style="font-size: 16px;">
                                        Số lượng: <?php echo $jobs_VN[$i]->staffNumber; ?> người
                                    </a>
                                    <ul class="row">
                                        <li class="dola float-left col-sm-6">
                                            <?php echo $jobs_VN[$i]->salary; ?>
                                        </li>
                                        <li class="col-sm-6 fas fa-map-marker-alt">
                                            <?php echo $jobs_VN[$i]->address; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>





                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row" style="color: #000;">
                            <?php for ($i=2 ; $i<4 ; $i++) {?>
                        <div class="col-sm-6">
                            <div class="border border-top-0 border-left-0 border-right-0 m-3" id="job_hot">
                                <div class="box-avata">
                                    <figure>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRINpQW1MKYXjZSeh0gSL9Y0msOGmy1jcJNQ&usqp=CAU" alt="">
                                    </figure>
                                </div>
                                <div class="box-content">
                                    <a href="<?php echo base_url('user/news/detail/'.$jobs_VN[$i]->id); ?>" style="font-size: 18px; color: #1e4da1">
                                        <?php echo $jobs_VN[$i]->nameNews;?>
                                    </a>
                                    <a href="#" class="text-secondary" style="font-size: 16px;">
                                        Số lượng: <?php echo $jobs_VN[$i]->staffNumber; ?> người
                                    </a>
                                    <ul class="row">
                                        <li class="dola float-left col-sm-6">
                                            <?php echo $jobs_VN[$i]->salary; ?>
                                        </li>
                                        <li class="col-sm-6 fas fa-map-marker-alt">
                                            <?php echo $jobs_VN[$i]->address; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
               
                        <?php } ?>
                    </div>
                </div>


                <div class="col-sm-12 text-center plus mb-5">
                    <a href="<?php echo base_url()?>viec-lam-gap" target="_blank" class="btn plus_add">Xem Thêm</a>
                </div>
            </div>
        </div>
    </div>
    </section>
<br><br>

<div class="services">
        <div class="news" style="text-align: center;font-size: 30px;color: black;">
        <strong>TIN TỨC</strong>
    </div>
            <br>
      <div class="container">
        <div class="row">
                    <?php for ($i=0 ; $i<3 ; $i++) {?>
                        <div class="col-md-4">
                          <div class="service-item ">
                            <div class="zoom_color noidung">
                                <img  style="height: 241px;" src="<?php echo $list_news[$i]->hinhanh?>" alt="">
                            </div>
                            
                            <div class="down-content">
                              <h2><a style="font-size: 20px;color: #000;" href="<?php echo base_url('user/tintuc/detail/'.$list_news[$i]->id)?>"> <?php echo $list_news[$i]->tieude ?></a> </h2>
                              <p style="height: auto;"><?php echo $list_news[$i]->mota?></p>
                              <a href="<?php echo base_url('user/tintuc/detail/'.$list_news[$i]->id)?>" class="filled-button">Đọc thêm</a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

        </div>
      </div>
    </div>

    <div class="fields" style="text-align: center;font-size: 30px;margin-bottom: -100;color: #000;">
        <strong>LĨNH VỰC HOẠT ĐỘNG</strong>

    </div>
       <section class="mt-5">
        <div class="container my-5">
           <div class="row mt-md-5 pt-md-5">
                <div class="row_bg col-12">
                    <div class="col-md-7 float-lef">
                        <div class="col-md-7_img">
                            <div class="col-md-7_img-girl">
                                <img src="public/user/img/associates_1.jpg" alt="" class="col-md-7_img-girl-fluid">
                            </div>  
                            <div id="gray-font"></div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center">
                            <a href="<?php echo base_url()?>tu-van-gioi-thieu" id="tht" class="btn btn_large">Tìm hiểu thêm</a>
                        </div>
                    </div>
                    <div class="col-md-5 mt-5 pt-2 float-rig">
                        <div class="col-md-5_content mt-md-5">
                            <div class="row">
                                <div class="col-12 text-blue">
                                    <h1 class="display-2" style="font-family: 'Roboto', sans-serif;font-size: 4.5rem;">1.Giới thiệu việc làm trong nước (Headhunter)</h1>
                                </div>
                                <div class="col-12 mt-md-5 lh" style="color: #000;">
                                    <h3>Quy trình tuyển dụng:</h3>
                                    <li>Doanh nghiệp tìm hiểu về Vietseiko. Cùng trao đổi giải pháp tuyển dụng nhân sự</li>

                                    <li>Tiền hành ký thỏa thuận hợp đồng, hợp tác</li>
                                    <li>Vietseiko chiêu mộ, tuyển chọn và tiến cử nhân sự</li>
                                    <li>Doanh nghiệp trực tiếp phỏng vấn và tuyển dụng</li>
                                    <li>Hỗ trợ ứng viên sau khi nhận việc</li>
                                    <li>Thanh toán</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row mt-md-5 pt-md-5">
                <div class="row_bg col-12">
                    <div class="col-md-7 float-lef">
                        <div class="col-md-7_img">
                            <div class="col-md-7_img-girl">
                                <img src="public/user/img/img-congty/banner4.jpg" alt="" class="col-md-7_img-girl-fluid">
                            </div>
                            <div id="gray-font"></div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center">
                            <a href="<?php echo base_url()?>gioi-thieu-ky-su" id="tht" class="btn btn_large">Tìm hiểu thêm</a>
                        </div>
                    </div>
                    <div class="col-md-5 mt-5 pt-2 float-rig">
                        <div class="col-md-5_content mt-md-5">
                            <div class="row">
                                <div class="col-12 text-blue">
                                    <h1 class="display-2" style="font-family: 'Roboto', sans-serif;font-size: 4.5rem;">Xuất khẩu lao động Nhật Bản</h1>
                                </div>
                                <div class="col-12 mt-md-5 lh" style="color: #000;">
                                    <h3>Thủ tục xuất khẩu lao động:</h3>
                                    <li>Đăng ký.</li>
                                    <li>Khám sức khỏe</li>
                                    <li>Thi tuyển phỏng vấn và đào tạo</li>
                                    <li>Hoàn tất các thủ tục xin Visa</li>
                                    <li>Xuất cảnh</li>
                                    <li>Thanh lý hợp đồng</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row mt-md-5 pt-md-5">
                <div class="row_bg col-12">
                    <div class="col-md-7 float-lef">
                        <div class="col-md-7_img">
                            <div class="col-md-7_img-girl">
                                <img src="public/user/img/consultant_1.jpg" alt="" class="col-md-7_img-girl-fluid">
                            </div>
                            <div id="gray-font"></div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center">
                            <a href="<?php echo base_url()?>tu-van-xuc-tien" id="tht" class="btn btn_large">Tìm hiểu thêm</a>
                        </div>
                    </div>
                    <div class="col-md-5 mt-5 pt-2 float-rig">
                        <div class="col-md-5_content mt-md-5">
                            <div class="row">
                                <div class="col-12 text-blue">
                                    <h1 class="display-2" style="font-family: 'Roboto', sans-serif;font-size: 4.5rem;">Tư vấn xúc tiến đầu tư (Doanh nghiệp Nhật Bản)</h1>
                                </div>
                                <div class="col-12 mt-md-5 lh" style="color: #000;">
                                    <h3>Thủ tục:</h3>
                                    <li>Hỗ trợ điều tra thị trường Việt Nam</li>
                                    <li>Tư vấn xin các loại giấy tờ liên quan đến đầu tư tại Việt Nam</li>
                                    <li>Giới thiệu doanh nghiệp Việt Nam</li>
                                    <li>Đại diện quý khách hàng tìm kiếm và gặp gỡ đối tác, làm cầu nối đầu tư hiệu quả cho nhà đầu tư nhật bản</li>
                                    <li>Hổ trợ tuyển dụng nhân sự việt nam</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>

<br>


    <!-- giới thiệu về cty -->
    <section id="hero">
        <div class="container-xl">
            <h2 class="post-title" style="margin-top: 50px;color: #000;">VIETSEIKO - KHÁT VỌNG CỦA BẠN, TƯƠNG LAI CỦA CHÚNG TA</h2>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="post featured-post-lg">
                        <div class="detail clearfix">
                            
                        </div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/q6ZwpLSxwpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="page_fb" style="padding-left: 30px;">
                        <h2 class="page-fb-title">FANPAGE FACEBOOK</h2>
                        <div class="fb-page" data-href="https://www.facebook.com/Cty.TNHH.Vietseiko" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cty.TNHH.Vietseiko" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cty.TNHH.Vietseiko">Vietseiko Co., Ltd</a></blockquote></div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="post-tabs rounded bordered">
                        <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="popular" aria-selected="true" class="nav-link active"
                                        data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab"
                                        type="button">
                                        Hoạt Động
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="recent" aria-selected="false" class="nav-link"
                                        data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab"
                                        type="button">
                                        Sự Kiện
                                    </button>
                                </li>
                            </ul>

                            <!-- Post Hoạt động -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- hoạt động post -->
                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/hoatdong-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Hoạt Động Ngoại Khóa Dành Cho Học Viên VietSeiko</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">15-09-2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post 1 -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/hoatdong-2.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Chúc mừng các chàng trai đã đậu phỏng vấn đơn Hàn - Cơ khí tỉnh Osaka nhé. </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">14-09-2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post 2 -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/hoatdong-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Chào mừng 6 bạn ứng viên tham gia đơn hàng kiểm tra, đóng gói công nghiệp cùng Vietseiko</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">30-08-2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Post Sự kiện -->
                            <div class="tab-pane fade" id="recent" aria-labelledby="recent-tab" role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/sukien-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Tham gia Sàn giao dịch việc làm 2022.</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">09-09-2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post 1 -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/sukien-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">VietSeiko tham gia ngày hội việc làm - HUTECH TECHSHOW 2022</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">27-08-2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post 2                                     <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo base_url()?>public/user/img/img-congty/sukien-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">VietSeiko tham gia ngày hội việc làm Khu Công Nghệ Cao Thủ Đức.</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">12-08-2022</li>
                                            </ul>
                                        </div>
                                    </div> -->

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

<div class="partners">
        <div class="row" style="text-align: center;font-size: 30px;">
          <div class="col-md-12" >
              <strong>LIÊN KẾT VỚI CÁC DOANH NGHIỆP - TẠO CƠ HỘI VIỆC LÀM CHO NGƯỜI LAO ĐỘNG</strong>
              <br><br> 
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12 marquee" >
            <div class="owl-partners owl-carousel marquee-content">
              <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/logo_nidec.png" title="Nidec" alt="1">
              </div>
               <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/logo_olympus.png" title="Olympus" alt="2">
              </div>
               <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/logo_lixil.jpg" title="Lixil" alt="3"> 
              </div>
              <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/logo_Nakajima.jpg" title="Nakajima" alt="4">
              </div>
              <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/shimizu_logo.png" title="Shimizu" alt="5">
              </div>
              <div class="partner-item">
                <img src="<?php echo base_url()?>public/user/img/logo_Sumitomo.png" title="Sumitomo" alt="6">
              </div>
                            
            </div>
          </div>
        </div>
      </div>
    </div>

    </section>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3033.524927092567!2d106.77114615693199!3d10.835620625226769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270c34838b03%3A0xd7a2ad66e58afeac!2sC%C3%B4ng%20Ty%20TNHH%20VIETSEIKO!5e0!3m2!1svi!2s!4v1648175501035!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</section>

    <script type="text/javascript">
        /* code javastri button top */
    jQuery(document).ready(function($){     
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 300) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }       
});

    </script>

<script src="<?php echo base_url()?>public/user/js/script.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/aos.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url()?>public/user/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url()?>public/user/js/scrollax.min.js"></script>
  
     

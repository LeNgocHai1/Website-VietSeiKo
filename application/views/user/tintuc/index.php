  <style>
    .banner{
            display: none;
        }
    .news{
      padding-top: 30px;
      color: red;

    }
    .news a{
        text-decoration: none;
        color: #6b58e7;
        font-size: 20px;
      }
    .news a:hover{
        color: #72afd2;
    }
    .news_hot-nb,
    .news_hot-item{
        background-color: white;
    }
    .news_title,
    .news_table-item{
        text-align: center;
    }
    .news_table{
        width: 75%;
        float: left;
        display: flex;
        flex-wrap: wrap;
    }
    .news_navbar{
        margin-top: 5%;
        width: 20%;
        float: right;
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
        border-radius: 15px;
        background-color: #1e4da1;
    }
    .news_table-item{
        width: calc(100%/3.5);
        padding-left: 20px;
        padding-bottom: 53px;
        display: flex;
        flex-direction: column;
    }
    .figure{
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
        border-radius: 15px;
    }
    .figure img,
    .news_hot-item-img img{
        width: 100%;
    }
    .news_hot-title{
        color: white;
        padding-left: 10px;
    }
    .news_table-item-info{
        padding: 10px;
    }
    .news_table-item-info i{
        padding: 10px 0;
        color: #029EB7;
        margin-right: 5px;
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
    .post-title h3 a{
        font-size: 13px;
        font-family: "latobold", Arial, Helvetica, sans-serif;
        color: #333333;
        line-height: 22px;
        padding-bottom: 6px;
        
    }
    .post-title {
        border-bottom: 1px solid #d4d4d4;
    }
    .post-title h3 a:hover {
        color: #28a745;
        transition: 0.3s;
    }
    .post-desc p{
        padding-top: 10px;
        color: #4d4d4d;
        overflow: hidden;
    }
    p, h3, h6{  
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
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


    /* Responsive  */
    @media (max-width: 739px){
        .news_table{
            flex-direction: column;
            width: 100%;
        }
        .news_table-item,
        .news_navbar{
            width: 100%;
            padding-left: 0;
        }
    }
    /* Tablet */
    @media (min-width: 739px){
        .news_table{
            width: 97%;
        }
        .new_hot-item-nb{
            padding: 10%;
        }
        .news_table-item{
            width: calc(100%/3.7);
        }
        .news_navbar{
            width: 19%;
        }
        .new_hot-item-nb a{
            padding: 7px 50px;
        }
        #news_care{
            margin-top:-103%;
        }
        #new_hot{
            margin-top:-86%;
        }
        .noidung {
                  overflow: hidden;
                }
                .zoom_color img {
                  height: 300px;
                  width: 300px;
                  transition: transform .5s, filter 1.5s ease-in-out;
                }
                .zoom_color img:hover {
                  filter: grayscale(0);
                  transform: scale(1.1);
                }
    }
  </style>
  <div class="tin-tuc">
    <div class="footer"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>


  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->  
           <div class="news">
                  <div class="news_title">
                      <h2>TIN TỨC CHUNG</h2>
                  </div>

                  <!-- tin túc chung  -->
                  <div class="news_table zoom_color noidung">


                      <?php foreach ($list as $row): ?>
                        <div class="news_table-item">
                            <div class="figure">
                                <div class="news_table-item-img"> <a href="<?php echo base_url('user/tintuc/detail/'.$row->id)?>"><img style="height: 190px;" src="<?php echo $row->hinhanh?>"></a>
                                    
                                </div>
                                <div class="news_table-item-info">
                                    <div class="post-title">
                                        <h3>
                                            <a href="<?php echo base_url('user/tintuc/detail/'.$row->id)?>"><?php echo $row->tieude ?></a>
                                        </h3>
                                    </div>
                                    <div class="post-desc">
                                        <p><?php echo $row->mota?></p>                           
                                    </div>
                                    <div class="post-date">
                                        <i class="fa fa-calendar"></i>
                                        <?php echo $row->ngaydang?>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <?php endforeach; ?>
                      <div class="pagination" style="width: 100%;">
                              <?php echo $paginator; ?>
                      </div>
                      
                  </div>

                  <!-- tin tức quan tâm  -->
                  <div class="news_navbar" id="news_care">
                      <div class="news_hot">
                          <div class="news_hot-title">
                              <h3>TIN TỨC QUAN TÂM</h3>
                          </div>
                          <div class="news_hot-nb">
                              <div class="new_hot-item-nb">
                                  <p>Thông báo việc làm - Hoàn toàn miễn phí và dễ dàng</p>
                                  <a href="#" title="TẠO NGAY">Tạo Ngay</a>
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
                                      <?php foreach ($list as $row): ?>

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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
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
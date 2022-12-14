
    <style>
        .banner_detail{
          /*background-image: url(https://vietseiko.com/public/user/img/container-top/banner_detail.png);*/
          height: 69vh;
          /*background-size: cover;
          background-repeat: no-repeat;
          background-position: center;*/
        }
        .banner_detail-box{
          margin-top: -26%;
          padding-left: 17%;
          padding-right: 17%;
        }
        .banner_detail-boxcontent{
          border: 1px solid white;
          background-color: white;
          border-radius: 8px;
          box-shadow: 0px 0px 10px #dcdbdb; 
          opacity: 0.9;
        }
        .banner{
          display: none;
        }
        .modal-open {
            padding-right: 0px !important;
        }

        .panel-item {
        padding: 5px;
      }

      .panel-item p {
        margin: 0;
        line-height: 20px;
      }

      .panel-item h4 {
        overflow: hidden;
        word-break: break-word;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        line-height: 24px;
        margin: 0;
      }

      .nhanthongbao input {
        display: block;
        float: left;
        border-radius: 8px;
        outline: none;
        border: 1px solid #1E4DA1;
        padding: 10px 5px;
      }

      .nhanthongbao input[type="email"] {
        width: 58%;
      }

      .nhanthongbao input[type="submit"] {
        width: 40%;
        float: right;
        color: white;
        background-color: #1E4DA1;
      }

      .nhanthongbao input[type="submit"]:hover {
        color: #1E4DA1;
        background-color: white;
        transition: all 0.3s;
      }

        @media (max-width: 739px)
        {

          .banner_detail{
            height: 39vh;
          }
          .banner_detail-box{
          margin-top: -26%;
          padding-left: 7%;
          padding-right: 7%;
          }

        }
      
    }



    </style>
<script type="text/javascript">
  div.style.removeProperty('zoom');

</script>

  <div class="wrap">
      <div class="chitietcongviec">
        <div class="banner_detail"></div>
          <div class="row banner_detail-box">
            <div class="col-8 banner_detail-boxcontent">
              <div class="panel-title">
                <h2 style="color: red;"><?php echo $news_infor->nameNews?></h2>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> M?? T???
                  C??NG VI???C
                </div>
                <div class="panel-body"><ul>
                  <li> Ng??nh ngh???: <?php echo $news_infor->jobs?> </li>
                  <li> ?????a ??i???m l??m vi???c: <?php echo $news_infor->address?></li>
                  <li> M?? t??? th??m: <?php echo $news_infor->descr_1?>
                  </li></ul>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> Y??U C???U C??NG VI???C V?? CH??? ????? PH??C L???I
                </div>
                <div class="panel-body">
                    <ul>
                        <li> Ng??n ng???:  <?php echo $news_infor->languages?></li>
                  <li> M?? t??? th??m:
                      <ul>
                         <?php echo $news_infor->descr_2?>
                      </ul>
                  </li>
                    </ul>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> CH??? ????? PH??C L???I
                </div>
                <div class="panel-body">
                  <li style="color: #000;"><?php echo $news_infor->benefit?></li>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> C??CH ???NG TUY???N
                </div>
                <div class="panel-body"><ul style="color: #000;">
                  <li> C??ch ???ng tuy???n:  <?php echo $news_infor->ctuyen?></li>
                  <!-- <li> Ng?????i ph??? tr??ch: <?php echo $news_infor->manager?></li> -->
                  <li> S??? ??i???n tho???i: <?php echo $news_infor->phone?></li>
                  <li> Email: <?php echo $news_infor->email?>
                  </li>
                  <li> Y??u c???u h??? s??: <?php echo $news_infor->req?></li>
                  <li> H???n nh???n h??? s??:  <span style="width: 70%; color: red;" ><?php echo $news_infor->receipt?></td></span></li>
                  </ul><p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">???ng tuy???n</button>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="panel-item banner_detail-boxcontent">
                <p><strong>T???o th??ng b??o vi???c l??m</strong></p>
                <p>Ch??ng t??i s??? g???i email cho b???n khi c?? vi???c l??m m???i.</p>
                <div class="nhanthongbao clearfix">
                  <input type="email" placeholder="@gmail.com">
                  <input type="submit" value="Nh???n th??ng b??o">
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3">
                <h3 style="font-weight: bold; margin: 0">C??ng vi???c t????ng t???</h3>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>K??? S?? THI???T K??? AUTO CAD 2D - THI???T B??? T??? ??I???N</strong></h4>
                  <p>Yamagata</p>
                  <p style="color:#1E4DA1">16.5 - 18,5 MAN</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>NH??N VI??N V??N PH??NG S???N XU???T</strong></h4>
                  <p>KCN Long ?????c, X?? Long ?????c</p>
                  <p style="color:#1E4DA1">Th???a thu???n</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>BUSINESS ANALYST (CHUY??N VI??N PH??N T??CH KINH DOANH)</strong></h4>
                  <p>B???n Ngh?? - qu???n 1 (HCM)</p>
                  <p style="color:#1E4DA1">Th???a thu???n</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>JAVA SENIOR DEVELOPER</strong></h4>
                  <p>B???n Ngh?? - qu???n 1 (HCM)</p>
                  <p style="color:#1E4DA1">1000 - 2000 USD</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>UI, UX DESIGNER</strong></h4>
                  <p>B???n Ngh?? - qu???n 1 (HCM)</p>
                  <p style="color:#1E4DA1">Th???a thu???n</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>NH??N VI??N L???P TR??NH BACKEND</strong></h4>
                  <p>Ph?????ng V??n Qu??n - H?? ????ng (HN)</p>
                  <p style="color:#1E4DA1">20 - 24 tri???u VND</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>NH??N VI??N FRONTEND DEV</strong></h4>
                  <p>Ph?????ng V??n Qu??n - H?? ????ng (HN)</p>
                  <p style="color:#1E4DA1">18 - 20.5 tri???u VND</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong>K??? S?? K??? THU???T S???N XU???T</strong></h4>
                  <p>Khu C??ng Ngh??? Cao - TP. Th??? ?????c (HCM)</p>
                  <p style="color:#1E4DA1">15 - 30 tri???u VND</p>
                </div>
              </div>

              <div class="panel-item banner_detail-boxcontent mt-3 clearfix pt-4 pb-4">
                <div class="col-md-4" style="padding: 0;">
                  <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo.jpg" alt="">
                </div>
                <div class="col-md-8">
                  <h4><strong> NH??N VI??N KINH DOANH</strong></h4>
                  <p>Ph?????ng Th???o ??i???n ???TP.Th??? ?????c (HCM)</p>
                  <p style="color:#1E4DA1">800 - 1200 USD</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      


<div class="modal fade box_ungtuyen" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content" >
            <div class="modal-body">
                <div class="form-group">
                  <strong><?php echo form_error('name','<p class="field-error">','</p>'); ?>
                  <p>H??? v?? t??n</p>
                  <input type="text" name="name" id="name"  class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>">
                </div>
                <div class="form-group">
                  <strong><?php echo form_error('phone','<p class="field-error">','</p>'); ?>
                  <p>S??? ??i???n tho???i</p>
                  <input type="text" name="phone" id="phone"  class="form-control" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>">
                </div>


                <div class="form-group">
                    <p>?????a ch??? Email</p>
                  <strong><?php echo form_error('email','<p class="field-error">','</p>'); ?></strong>
                  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>">
                </div>

                <div class="form-group">
                    <p>?????a ch??? hi???n t???i</p>

                  <strong><?php echo form_error('address','<p class="field-error">','</p>'); ?></strong>
                  <input type="text" id="address" name="address" class="form-control" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>">
                </div>

                <div class="form-group">
                  <label for="message-text" class="col-form-label"> C??u h???i ho???c th???c m???c: </label>
                  <textarea value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" type="text" class="form-control md-textarea" id="message" name="message" rows="2"></textarea>
                </div>



                <div id="alert-msg"></div>

            </div>
            <div class="modal-footer" style="padding-top: 0;">
                <input class="btn btn-default" id="submit" name="submit" type="button" value="Send Mail" />
                <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" />
            </div>

            <?php echo form_close(); ?>            

          </div>
      </div>

    </div>

  <script>

      $('#submit').click(function(){
        var form_data = {
          name:$('#name').val(),
          phone:$('#phone').val(),
          email:$('#email').val(),
          address:$('#address').val(),
          message:$('#message').val()
        };
        console.log(form_data);
        
        
        $.ajax({
          url: "<?php echo base_url('chi-tiet-gui-email');?>",
          type: 'POST',
          data: form_data,
          success: function (msg) {
            // body...
            if (msg=="YES") {
              $('#alert-msg').html('<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
              console.log("ok");
            }else if (msg =='NO'){
              $('#alert-msg').html('<div class="alert alert-danger text-center">Error in sending your message! Please try again later.</div>');
              console.log("not ok");

            }else{
              console.log("test");
              $('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
            }
          }
        });
        return false;



      });

      $('#exampleModal').on('show.bs.modal', function (event) {
      $('body').removeAttr(style)
      var button = $(event.relatedTarget) 
      var recipient = button.data('whatever') 
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
  </script>




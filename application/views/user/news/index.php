    <style>
        .banner{
            display: none;
        }
    </style>
  <div class="wrap">
      <div class="chitietcongviec">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="panel-title mt-5 pt-5">
                <h2>CHI TIẾT CÔNG VIỆC "<?php echo $news_infor->nameNews?>"</h2>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> MÔ TẢ
                  CÔNG VIỆC
                </div>
                <div class="panel-body"><ul>
                  <li> Ngành nghề: <?php echo $news_infor->jobs?> </li>
                  <li> Địa điểm làm việc: <?php echo $news_infor->address?></li>
                  <li> Mức lương: <?php echo $news_infor->salary?></li>
                  <li> Mô tả thêm: <?php echo $news_infor->descr_1?>
                  </li></ul>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> YÊU CẦU CÔNG VIỆC
                </div>
                <div class="panel-body">
                    <ul>
                        <li> Ngôn ngữ:	<?php echo $news_infor->languages?></li>
                  <li> Mô tả thêm:
                      <ul>
                         <?php echo $news_infor->descr_2?>
                      </ul>
                  </li>
                    </ul>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> CHẾ ĐỘ PHÚC LỢI
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-chevron-right"></span> CÁCH ỨNG TUYỂN
                </div>
                <div class="panel-body"><ul>
                  <li> Cách ứng tuyển:	<?php echo $news_infor->ctuyen?></li>
                  <li> Người phụ trách:	<?php echo $news_infor->manager?></li>
                  <li> Số điện thoại:	<?php echo $news_infor->phone?></li>
                  <li> Email:	<?php echo $news_infor->email?>
                  </li>
                  <li> Yêu cầu hồ sơ:	<?php echo $news_infor->req?></li>
                  <li> Hạn nhận hồ sơ:	<span style="width: 70%; color: red;" ><?php echo $news_infor->receipt?></td></span></li>
                  </ul><p>
                    <a href="javascript:void(0)" class="btn btn-default" id="dkut" onclick="dkUngTuyen()">
                      Ứng tuyển
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-ungtuyen" id="box-dkut">
        <div class="box_ungtuyen">
              <div class="box_ungtuyen-name">
                  <H2>Ứng tuyển vị trí</H2>
              </div>
              <div class="box_ungtuyen-info">
                <form>
                  <label for="btnName"><strong>Họ và tên:</strong></label>
                  <input type="text" name="btnName" pattern="[A-Z]" placeholder="In Hoa">

                  <label for="btnPhone"><strong>Số điện thoại:</strong></label>
                  <input type="tel" name="btnPhone">

                  <label for="btnMail"><strong>Địa chỉ Email:</strong></label>
                  <input type="email" name="btnEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                  <label for="btnLocal"><strong>Địa chỉ hiện tại:</strong></label>
                  <input type="text" name="btnLocal" pattern="[a-z][A-Z]{0,1000}">

                  <textarea name="" id="" style="width:100%; height:100px;" placeholder="Câu hỏi hoặc thắc mắc"></textarea>
                  <div class="dk">
                    <input type="submit"></input>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>

    <script>
      function dkUngTuyen(){
        document.getElementById('dkut')
        return document.getElementById('box-dkut').style.display="block"
      }
    </script>
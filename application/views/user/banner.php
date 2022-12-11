
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1500,x:-1,y:-0.5,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$Swing,$Top:$Jease$.$InJump},$Round:{$Top:1.5}},
              {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
              {$Duration:1500,x:1,y:0.5,$Delay:60,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>



<div class="slide_1">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 400px;">
            <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url()?>public/user/img/bn01.jpg" alt="First slide" style="height: 400;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url()?>public/user/img/bn04_test2.jpg" alt="Second slide" style="height: 400;">
            </div>      
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
   

    <section class="cb-box-find">
        <div class="container">
            <div class="main-box" style="width: 495px;max-width: 100%;margin: 0 auto; border-radius: 8px;margin-right: 45%; margin-bottom: 50px; margin-top: 45px; ">
                <div class="box-body" style="background: #f4f4f4; height: 200px; text-align: center;">
                    <div class="title">
                        <strong style="font-size: 25px;color: #49479c;">
                            KHÁT VỌNG CỦA BẠN, TƯƠNG LAI CỦA CHÚNG TA
                        </strong>
                    </div>    
                    <div>
                        <div class="form-group col-12 form-keyword" style=" margin-bottom: 0px; margin-top: 40px;">
                        <label><span class="mdi mdi-magnify"></span></label>
                        <input style="height: 40px;width: 310px;"  type="text" class="prompt keyword" autofocus="" name="keyword" id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty" autocomplete="off">
                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                        </div>
                    </div>
                    <div class="toggle-search" style="margin-left: 15em;">
                        Tìm kiếm nâng cao
                        </div>
                        <div class="find-jobs">
                        <button type="submit" style="height: 45px;width: 400px;font-weight: 700;font-size: 20;" class="btn btn-danger">
                        
                        
                        
                        <a style="color: white;" href="<?php echo base_url()?>nguoi-tim-viec">
                                NGƯỜI TÌM VIỆC
                            </a>
                        </button>
                    </div>
                </div>
                <div class="box-footer" style="height: 130px; text-align:center" >
                    <div >
                        <h4 style="margin-top: 32px;">  Đăng hồ sơ nghề nghiệp để dễ dàng ứng tuyển nhanh </h4>
                    </div>
                    <div>
                        <button type="submit" style="height: 45px;width: 400px; font-weight: 700;font-size: 20;" class="btn btn-primary">
                        
                        <a style="color: white;" href="<?php echo base_url()?>nha-tuyen-dung">
                        NHÀ TUYỂN DỤNG
                            </a>
                        
                        
                        </button> 
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">jssor_1_slider_init();</script>

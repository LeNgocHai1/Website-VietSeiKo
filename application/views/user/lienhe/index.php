  <!-- Display the status message -->
    <?php if(!empty($status)){ ?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php } ?>


<div style="margin: auto; max-width:1000px; width: auto;">

<section class="content">
	<div class="panel panel-primary">
		<div class="panel-body">
<section class="mb-4">
<div class="container">
     <div class="containerinfo">
       <div>
         <h2>Thông Tin Liên Hệ</h2>
         <ul class="info">
           <li>
             <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
             <span>108/17, Đường 79, Phường Tăng Nhơn Phú B<br />
               TP Thủ Đức <br />
               Thành Phố Hồ Chí Minh
             </span>
           </li>
           <li>
             <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
             <span>hello.quykhachhang
               @vietseiko.com</span>
           </li>
          <li>
             <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
             <span>(028) 3636.9996</span>
           </li>
         </ul>
       </div>
       <ul class="sci">
         <li>
            <a href="https://www.facebook.com/Cty.TNHH.Vietseiko/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
         <li>
            <a href="https://www.linkedin.com/company/vietseiko">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </li>
       </ul>
    </div>
    <!--Grid column-->
    <div class="containerForm">
           <h2>Gửi Lời Nhắn</h2>
           <div class="formBox">
               <div class="inputBox w50">
                        <input style="height: 20px;" type="text" id="name" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"> 
                        <label for="name" class="">Họ Tên</label>
                        <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                      </div>
               <div class="inputBox w50">
               <input style="height: 20px;" type="text" id="address" name="address" class="form-control" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>">
                        <label for="email" class="">Nơi đăng ký làm việc</label>
                        <?php echo form_error('address','<p class="field-error">','</p>'); ?>
               </div>
               <div class="inputBox w50">
                      <input style="height: 20px;" type="text" id="address" name="address" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>">
                      <label for="email" class="">Email</label>
                      <?php echo form_error('email','<p class="field-error">','</p>'); ?>
               </div>
               <div class="inputBox w50">
               <input  style="height: 20px;" type="text" id="phone" name="phone" class="form-control" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>">
                        <label for="email" class="">Số điện thoại</label>   
                        <?php echo form_error('phone','<p class="field-error">','</p>'); ?>
               </div>
               <div class="inputBox w100">
                   <textarea value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Nội dung</label>
               </div>
               <div class="inputBox w100">
               <input class="btn btn-primary" type="submit" value="Gửi" name="contactSubmit">
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


</div>

<style type="text/css">
  .banner{
            display: none;
        }
    section{
      position: relative;
      display: flex;
      justify-content: center;
      min-height: 100vh;
      background: #fdfdfd;
    }
section.mb-4mb-4::before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width:50%;
  height: 100%;
  background: #03a9f4;
}
section.container{
  position: relative;
  min-width: 1100px;
  min-height: 550px;
  display:flex;
  z-index: 100;
}
.containerinfo{
  position: absolute;
  top: 40px;
  width: 350px;
  height: calc(100% - 80px);
  background: #1E4DA1;
  z-index: 1;
  padding: 38px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 20px 20px rgba(0,0,0,0.2);
}
.containerinfo h2{
  color: #fff;
  font-size: 24px;
  margin: 20px 0;
}
.containerinfo li{
  position: relative;
  list-style: none;
  display: flex;
  margin: 20px 0;
  cursor: pointer;
  align-items: flex-start;
}
.containerinfo li span{
  color: #fff;
  margin-left: 10px;
  font-weight: 300;
  opacity: 0.5;
  font-size: 20px;
}
.containerinfo li:hover span{
  opacity: 1;
}
.sci{
  position: relative;
  display:flex;
}
.sci li{
  list-style: none;
  margin-right: 15px;
}
.sci li a{
  text-decoration: none;
  opacity: 0.5;
  color: #fff;
  font-size: 32px;
}
.sci li:hover a{
  opacity: 1;
}
.containerForm{
  position: absolute;
  padding: 70px 50px;
  background: #fff;
  margin-left: 150px;
  padding-left: 250px;
  width: calc(100% - 150px);
  height: 100%;
  box-shadow: 0 50px 50px rgba(0,0,0,0.5);
}
.containerForm h2{
  color: #0f3959;
  font-size: 24px;
  font-weight: 500;
}
.containerForm .formBox{
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding-top: 30px;
}
.containerForm .formBox .inputBox{
  position: relative;
  margin: 0 0 25px 0;
}
.containerForm .formBox .inputBox.w50{
  width: 47%;
}
.containerForm .formBox .inputBox.w100{
  width: 100%;
}
.containerForm .formBox .inputBox input,.containerForm .formBox .inputBox textarea{
  width: 100%;
  padding: 5px 0;
  resize: none;
  font-size: 18px;
  font-weight: 400;
  color: #333;
  border: none;
  border-bottom: 1px solid #777;
  outline: none;
}
.containerForm .formBox .inputBox textarea{
  min-height: 120px;
}
.containerForm .formBox .inputBox input[type="submit"]{
  position: relative;
  cursor: pointer;
  background: #1E4DA1;
  color: #fff;
  border: none;
  max-width: 150px;
  padding: 12px;
}
.containerForm .formBox .inputBox span{
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 18px;
  font-weight: 400;
  color: #333;
  transition: 0.5s;
  pointer-events: none;
}
.containerForm .formBox .inputBox input:focus ~ span,.containerForm .formBox .inputBox textarea:focus ~ span,
.containerForm .formBox .inputBox input:valid ~ span,.containerForm .formBox .inputBox textarea:valid ~ span{
  transform: translateY(-20px);
  font-size: 5px;
  font-weight: 400;
  letter-spacing: 1px;
  color: #6f56ff
}
@media only screen and (max-width: 46.1875em){
  .containerinfo {
    position: initial; 
    top: 40px;
    width: 350px;
    /* height: calc(100% - 80px); */
    background: #1E4DA1;
    z-index: 1;
    padding: 38px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    margin-top: 15px;
}
  .containerForm{
     
    padding: 70px 5px;
    background: #fff;
    margin-left: -10px; 
    /* padding-left: 250px; */
    width: calc(100% - -10px);
    height: 100%;
    box-shadow: 0 50px 50px rgb(0 0 0 / 50%);
    display: block;
   /* margin-top: 750px;*/
  }
  .map {
    margin-top: 800px;
  }
  .containerForm .formBox {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
    flex-direction: column;
}
.containerForm .formBox .inputBox.w50 {
    width: 100%;
}
  }

</style>
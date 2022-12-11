  <!-- Display the status message -->
  <?php if(!empty($status)){ ?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php } ?>


<div class="nhatuyendung" >


<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">ỨNG VIÊN ĐĂNG KÝ ỨNG TUYỂN</h2>
<!--Section description-->

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="" method="post">

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="name" class="">Họ và tên *</label>
                    </div>
                    <div class="col-md-9">
                        <div id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="name" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>">
                            <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="Donhang" class="">Đơn hàng </label>
                    </div>
                    <div class="col-md-9">
                        <div id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="Donhang" name="Donhang" class="form-control" value="<?php echo !empty($postData['Donhang'])?$postData['Donhang']:''; ?>">
                            <?php echo form_error('Donhang','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="phone" class="">Số điện thoại *</label>
                    </div>
                    <div class="col-md-9">
                        <div id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="phone" name="phone" class="form-control" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>">
                            <?php echo form_error('phone','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <!--Grid column-->
                    
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="email" class="">Email liên hệ *</label>
                    </div>
                    <div class="col-md-9">
                        <div  id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>">
                            <?php echo form_error('email','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="message">Nội dung</label>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-9">
                        <p style="margin-left: 16px;">Hãy để lại những vấn đề/thắc mắc/câu hỏi của bạn ngay tại đây để được hỗ trợ tư vấn ngay:
</p>
                        <div  id = "content_nhadangky" class="md-form">
                            <textarea value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" type="text" id="message" name="message" rows="2" placeholder="Nhập vào đây câu hỏi mà bạn cần tư vấn" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                
                <input class="btn btn-primary" type="submit" value="NỘP HỒ SƠ" name="contactSubmit">

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
    
        <!--Grid column-->

    </div>




  <!-- Display the status message -->
  <?php if(!empty($status)){ ?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php } ?>


<div class="nhatuyendung" >


<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">NHÀ TUYỂN DỤNG ĐĂNG KÝ</h2>
<!--Section description-->

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="" method="post">

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="name" class="">Tên công ty</label>
                    </div>
                    <div class="col-md-9">
                        <div id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="name" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>">
                            <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <!--Grid column-->
                
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="city" class="">Tỉnh/thành phố *</label>
                    </div>
                    <div class="col-md-9">
                        <div id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="city" name="city" class="form-control" value="<?php echo !empty($postData['city'])?$postData['city']:''; ?>">
                            <?php echo form_error('city','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="field" class="">Lĩnh vực hoạt động</label>
                    </div>
                    <div class="col-md-9">
                        <div  id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="field" name="field" class="form-control" value="<?php echo !empty($postData['field'])?$postData['field']:''; ?>">
                            <?php echo form_error('field','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <div  class="col-md-3">
                    <label id = "label_nhadangky" for="number_people" class="">Quy mô nhân sự *</label>
                    </div>
                    <div class="col-md-9">
                        <div   id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="number_people" name="number_people" class="form-control" value="<?php echo !empty($postData['number_people'])?$postData['number_people']:''; ?>">
                            <?php echo form_error('number_people','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="your_name" class="">Tên người liên hệ *</label>
                    </div>
                    <div class="col-md-9">
                        <div   id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="your_name" name="your_name" class="form-control" value="<?php echo !empty($postData['your_name'])?$postData['your_name']:''; ?>">
                            <?php echo form_error('your_name','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <label id = "label_nhadangky" for="phone" class="">Số điện thoại liên hệ *</label>
                    </div>
                    <div class="col-md-9">
                        <div  id = "content_nhadangky" class="md-form mb-0">
                            <input style="height: 35px;" type="text" id="phone" name="phone" class="form-control" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>">
                            <?php echo form_error('phone','<p class="field-error">','</p>'); ?>
                        </div>
                    </div>
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

                        <div  id = "content_nhadangky" class="md-form">
                            <textarea value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                
                <input class="btn btn-primary" type="submit" value="ĐĂNG KÝ" name="contactSubmit">

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
    
        <!--Grid column-->

    </div>




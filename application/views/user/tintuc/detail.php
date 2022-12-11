<style type="text/css">
    
.detail {
    border: 2px solid #cce7d0;
    border-radius: 4px;
    padding: 60px 60px 20px 60px;
    box-shadow: 20px 20px 34px rgb(0 0 0 / 3%);
}
.detail .title{
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    line-height: 40px;
    padding-bottom: 15px;
}
.detail .content_expand_date_view {
    width: 20%;
    margin: 0px 40% 20px 40%;
    border-top: 1px solid #d4d4d4;
    float: left;
    width: 16%;
    padding-top: 15px;
}

.detail .content_expand_date {
    width: auto;
    float: left;
    display: block;
    font-size: 11px;
    color: #4d4d4d;
    text-align: center;
    padding-left: 20px;
}
.detail .noidung {
    width: 92%;
    display: block;
    margin: 0px 4%;
    font-family: 'Tinos', serif;
    font-size: 20px;
    color: #898989;
    line-height: 30px;
    text-align: left;
}
.content-mota {
    font-weight: bold;
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

.product-top {
    margin-bottom: 30px;
    margin-left: 300px;
}
.product-top span {
    display: grid;
    align-content: space-evenly;
}
.product-top a {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0 12px;
    font-size: 12px;
}
.content-mota {
    border-bottom: 1px solid #ccc;
}
/*-----------------  page------------------------- */
#page-header {
    background-image: url(<?php echo base_url()?>public/user/img/banner-tintuc1.jpg);
    width: 100%;
    height: 40vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 14px;
    margin-bottom: 30px;
}

#page-header h2 {
    font-size: 40px;
    font-weight: bold;
}

#page-header h2,
#page-header p {
    color: #6c757d;
}
.fb-like {
    align-items: center;
}
.fb-comments {
    padding-bottom: 70px;
    padding-left: 30px;
    padding-top: 50px;
}

</style>
<!--- Link javastrip nút like fb--->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="RVJbO6eW"></script>
<!--- Link javastrip nút share fb--->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="jGTxzGep"></script>
<!--- Link javastrip phần bình luận--->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="NlyMAP3I"></script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>






    <div class="footer"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>

<!-- Hero -->
<section id="page-header">

            <h2>#Trang Tin Tức</h2>

            <p> I’ve just read about … </p>
        </section>
<div class="product-top row">
            <a href="https://www.vietseiko.com/">Trang chủ</a><span>&#10230;</span><a href="https://www.vietseiko.com/tin-tuc"> Tin Tức</a><span>&#10230;</span><a href="#"> <?php echo $news_infor->tieude ?> </a>
        </div>

<div class="detail" style="margin: 0 25%">
    <p class="title"><?php echo $news_infor->tieude; ?></p>
    <!--    CODE NÚT LIKE       -->
    <div class="fb-like" data-href="https://www.facebook.com/Cty.TNHH.Vietseiko/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
    <!--    CODE NÚT SHARE       -->
    <div class="fb-share-button" data-href="<?php echo $news_infor->id ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    <div class="content_expand_date_view">
        <p class="content_expand_date"><?php echo $news_infor->ngaydang; ?></p>
    </div>
    <div class="content-mota">
        <p><?php echo $news_infor->mota; ?></p>
    </div>
    
    <div class="noidung"><?php echo $news_infor->noidung?></div>
    <!--    CODE NÚT COMMENT       -->
    <div class="fb-comments" data-href="https://www.facebook.com/Cty.TNHH.Vietseiko/" data-width="" data-numposts="5"></div>
    
</div>



<style>
@media(max-width: 739px){
    .detail{
        margin: 0 5% !important;
    }
    .detail .content_expand_date {
        
    }
}
</style>
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
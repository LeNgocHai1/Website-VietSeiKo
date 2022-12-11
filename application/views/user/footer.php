<link
            href="https://fonts.googleapis.com/css2?family=Merienda&family=Oswald:wght@300;400;500&family=Roboto:wght@400;500;700&display=swap"
            rel="stylesheet">
<style type="text/css">
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

    /**
     * colors
     */
  
    --rich-black-fogra-29_a85: hsla(207, 24%, 7%, 0.85);
    --rich-black-fogra-29_a75: hsla(207, 24%, 7%, 0.75);
    --rich-black-fogra-29: hsl(207, 24%, 7%);
    --rich-black-fogra-39: hsl(210, 25%, 5%);
    --dark-orange: hsl(32, 100%, 50%);
    --light-gray: hsl(206, 8%, 82%);
    --white_a10: hsla(0, 0%, 100%, 0.1);
    --white_a60: hsla(0, 0%, 100%, 0.6);
    --camel: hsl(27, 34%, 58%);
    --white: hsl(0, 0%, 100%);
  
    /**
     * gradient
     */
  
    --gradient: linear-gradient(
      to top,
      hsla(210, 25%, 5%, 0.95) 0,
      hsla(210, 24%, 7%, 0.45) 70%,
      hsla(207, 24%, 7%, 0) 100%
    );
  
    /**
     * typography
     */
  
    --ff-oswald: 'Oswald', sans-serif;
    --ff-roboto: 'Roboto', sans-serif;
    --ff-merienda: 'Merienda', cursive;
    
    --fs-1: 5rem;
    --fs-2: 3.2rem;
    --fs-3: 2.4rem;
    --fs-4: 2.2rem;
    --fs-5: 1.4rem;
    --fs-6: 1.3rem;
    
    --fw-400: 400;
    --fw-500: 500;
    --fw-600: 600;
  
    /**
     * spacing
     */
  
    --section-padding: 70px;
  
    /**
     * border radius
     */
  
    --radius-circle: 50%;
    --radius-5: 5px;
  
    /**
     * transition
     */
  
    --transition-1: 0.25s ease;
    --transition-2: 0.5s ease;
    --transition-3: 0.75s ease;
    --cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
    --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);
  
  }
  
  
  
  
  
  /*-----------------------------------*\
    #RESET
  \*-----------------------------------*/
  
  *,
  *::before,
  *::after {
    padding: 0;
    box-sizing: border-box;
  }
  
  li { list-style: none; }
  
  a,
  img,
  span,
  data,
  button { display: block; }
  
  a {
    color: inherit;
    text-decoration: none;
  }
  
  img { height: auto; }
  
  button {
    background: none;
    border: none;
    font: inherit;
    cursor: pointer;
  }
  
  ion-icon { pointer-events: none; }
  
  html {
    font-family: var(--ff-roboto);
    font-size: 10px;
    scroll-behavior: smooth;
  }
  
  body {
    color: var(--white_a60);
  }
  
  body.active { overflow: hidden; }
  
  :focus-visible { outline-offset: 4px; }
  
  ::selection {
    background-color: var(--camel_a50);
    color: var(--white);
  }
  
  ::-webkit-scrollbar { width: 10px; }
  
  ::-webkit-scrollbar-track { background-color: hsl(0, 0%, 98%); }
  
  ::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }
  
  ::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }
  
  
  
  
  
  /*-----------------------------------*\
    #REUSED STYLE
  \*-----------------------------------*/

  .grid-list {
    display: grid;
    gap: 30px;
  }
  /*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

.footer { background-color: #ccc }

.footer-top {
  color: var(--white);
  display: grid;
  gap: 50px;
  border-block-end: 1px solid var(--white_a10);
}

.footer-list-title {
  font-family: var(--ff-oswald);
  margin-block-end: 20px;
}

.border-1 {
    
  border-bottom: 1px solid #ccc;
}

.footer-list-item {
  list-style: disc;
  margin-inline-start: 18px;
  margin-block-end: 10px;
}

.grid-list ion-icon {
        font-size: 30px;
    }

    .grid-list li a ion-icon {
        color: #fff;
    }

    .logo p {
      padding-left: 35px;
    }

    .footer-list li a {
        color: #858181;
        margin-block-end: 20px;
    }

     .footer-list li a:hover  {
        color: #6cd1a3ad;
        transition: 0.3s;
     }

.page-facebook {
        height: 70px;
        width: 190px;
        margin-top: 10px;
        background: #fff;
        margin-right: 1px;
        padding: 8px 10px;
        color: #163774;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    .page-facebook span {
        cursor: default;
        font-size: 14px;
        font-family: "latoregular", Arial, Helvetica, sans-serif;
        color: black;
    }

    .page-facebook span a {
        color: #000;
    }

    .span-page {
        padding-top: 20px;
    }

.footer-list .strong {
  color: var(--dark-orange);
  font-family: var(--ff-merienda);
  margin-inline-start: 18px;
}

.footer-list .span { color: var(--camel); }

.footer-list .wrapper {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  margin-block-start: 10px;
}

.footer-list .wrapper .span { font-weight: var(--fw-600); }

.footer-list ion-icon {
  color: var(--camel);
  font-size: 25px;
  --ionicon-stroke-width: 35px;
}

.footer-list .grid-list {
  grid-template-columns: repeat(2, 1fr);
  gap: 50px;
  border: 1px solid;
  padding: 10px 20px;
}


.copyright {
  text-align: center;
  font-size: var(--fs-5);
}


/*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

/**
 * responsive for large than 575px screen
 */

 @media (min-width: 575px) {

    /**
     * REUSED STYLE
     */
  
    .container { padding-inline: 30px; }
 }


 /**
 * responsive for large than 768px screen
 */

@media (min-width: 768px) {

    /**
     * CUSTOM PROPERTY
     */
  
    :root {
  
      /**
       * typography
       */
  
      --fs-1: 9rem;
      --fs-2: 4.2rem;
  
    }
  
  
  
    /**
     * REUSED STYLE
     */
  
    .h1 { line-height: 1.1; }
  
    .btn {
      --fs-6: 1.4rem;
      padding-inline: 30px;
    }
  
    .btn ion-icon { font-size: 18px; }
  
  
  
    /**
     * FOOTER
     */
  
    .footer-top { grid-template-columns: 1fr 1fr; }
  
    .copyright { font-size: unset; }
  
  }
  
  
  
  
  
  /**
   * responsive for large than 992px screen
   */
  
  @media (min-width: 992px) {
  
    /**
     * CUSTOM PROPERTY
     */
  
    :root {
  
      /**
       * typography
       */
  
      --fs-1: 12rem;
  
      /**
       * spacing
       */
  
      --section-padding: 130px;
  
    }
  
  
  
    /**
     * REUSED STYLE
     */
  
    .grid-list { 
        grid-template-columns: repeat(5, 0fr); 
        padding-top: 10px;
    }

    .grid-list ion-icon {
        font-size: 30px;
    }

    .grid-list li a ion-icon {
        color: #fff;
    }

    .logo p {
      padding-left: 35px;
    }

    .footer-list li a {
        color: #858181;
        margin-block-end: 20px;
    }

     .footer-list li a:hover  {
        color: #6cd1a3ad;
        transition: 0.3s;
     }

     .page-facebook {
        height: 70px;
        width: 190px;
        margin-top: 10px;
        background: #fff;
        margin-right: 1px;
        padding: 8px 10px;
        color: #163774;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    .page-facebook span {
        cursor: default;
        font-size: 14px;
        font-family: "latoregular", Arial, Helvetica, sans-serif;
        color: black;
    }

    .page-facebook span a {
        color: #000;
    }

    .span-page {
        padding-top: 20px;
    }
  
    /**
     * FOOTER
     */
  
    .footer-top {
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      padding-bottom: 40px;
    }

    .footer-top-2 {
        grid-template-columns: repeat(6, 1fr);
        display: grid;
        gap: 20px;
        padding-bottom: 40px;
        border-bottom: 1px solid;
      }

    .footer-top-3 {
        grid-template-columns: repeat(3, 1fr);
        display: grid;
        gap: 20px;
        padding-bottom: 40px;
      }

      .footer-top-4 {
        grid-template-columns: repeat(5, 1fr);
        display: grid;
        gap: 20px;
        padding-bottom: 40px;
      }
  
  }
  
  
  
  
  
  /**
   * responsive for large than 1200px screen
   */
  
  @media (min-width: 1200px) {
  
    /**
     * REUSED STYLE
     */
  
    :is(.section, .footer) .container {
      max-width: 1200px;
      width: 100%;
      margin-inline: auto;
    }
  
  
  }
}

</style>
<!--------------- Hàm menu cuối footer ------------------------>

<footer class="footer" style="padding: 10px 0px;">
            <div class="container">


                <!---------------------------#1---------------------------------->

                <div class="footer-top section" data-reveal>

                    <div class="footer-brand">
                        <a href="#" class="logo">
                            <img src="https://vietseiko.com/public/user/img/img-congty/NewLogo-removebg.png" width="216"
                                height="80" class="w-100" alt="Vietseiko">
                                <p>Kết Nối Với Chúng Tôi</p>

                                <ul class="grid-list">
                                     <li>
                                        <a href="https://www.facebook.com/Cty.TNHH.Vietseiko/">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.linkedin.com/company/vietseiko">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://youtube.com/channel/UCxl9i1I_m1L7U2twNv2ATfQ">
                                            <ion-icon name="logo-youtube"></ion-icon>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.tiktok.com/@vietseiko.hr">
                                            <ion-icon name="logo-tiktok"></ion-icon>
                                        </a>
                                    </li>
                                </ul>

                                
                        </a>
                    </div>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">Giờ Làm Việc</p>
                        </li>

                        <li class="footer-list-item">
                            <p>Thứ 2 - Thứ 6</p>

                            <span class="span">08:00 am - 17:00pm</span>
                        </li>

                        <li class="footer-list-item">
                            <p>Chỉ Thứ 7</p>

                            <span class="span">08:00 am - 12:00pm</span>
                        </li>

                        <li>
                            <strong class="strong">Sunday Close</strong>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">Contact Us</p>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="location-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                

                                    <p>Số 108/17, Đường 79, Phường Tăng Nhơn Phú B, TP.Thủ Đức, TP.HCM</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="mail-unread-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Email:</span>
                                    <p>hello.quykhachhang@vietseiko.com</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="call-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Phone:</span>

                                    <p>(028) 3636.9996 - 0363.212.627</p>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <ul class="grid-list">

                                <li>
                                    <div class="grid-item">
                                        <a href="<?php echo base_url()?>giay-phep">
                                            <img src="<?php echo base_url()?>public/user/img/icon_giayphep@2x.png"
                                            width="80" height="80"
                                            loading="lazy" alt="Gallery"
                                            class="w-100">
                                            <span style="font-size: 10px;text-align: center;color: burlywood;padding-top: 5px;"> 7907-ldtbxh-gp</span>
                                            <span style="text-align: center; font-size: 12px;">Giấy Phép Kinh Doanh Trong Nước</span>
                                        </a>
                                        
                                    </div>
                                </li>

                                <li>
                                    <div class="grid-item">
                                        <a href="<?php echo base_url()?>giay-phep-kinh-doanh">
                                            <img src="<?php echo base_url()?>public/user/img/icon_giayphep@2x.png"
                                            width="80" height="80"
                                            loading="lazy" alt="Gallery"
                                            class="w-100">
                                            <span style="font-size: 10px;text-align: center;color: burlywood;padding-top: 5px;"> 7907-ldtbxh-gp</span>
                                            <span style="text-align: center; font-size: 12px;">Giấy Phép Kinh Doanh</span>
                                        </a>
                                        
                                    </div>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </div>

                <!---------------------------#2---------------------------------->

                <div class="footer-top-4 section" data-reveal>

                    <ul class="footer-list">
                    <div class="page-facebook">
                        <div class="facebook_content">
                            <span>
                                <a href="https://www.facebook.com/xuatkhaulaodongnhatbanVietseiko" target="_blank">Xuất Khẩu Lao Động Nhật Bản</a>
                            </span>
                            <span>
                               <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FxuatkhaulaodongnhatbanVietseiko&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=307551959318533" width="81" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                            </span>
                        </div>
                    </div>

                    </ul>

                    <ul class="footer-list">

                        <div class="page-facebook">
                            <div class="facebook_content">
                                <span>
                                    <a href="https://www.facebook.com/HR-Vietseiko-Vi%E1%BB%87c-L%C3%A0m-Nhanh-108428324645270" target="_blank">HR- Việc Làm Nhanh</a>
                                </span>
                                <span class="span-page">
                                   <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/HR-Vietseiko-Vi%E1%BB%87c-L%C3%A0m-Nhanh-108428324645270;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=307551959318533" width="81" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                                </span>
                            </div>
                        </div>

                    </ul>

                    <ul class="footer-list">

                        <div class="page-facebook">
                            <div class="facebook_content">
                                <span>
                                    <a href="https://www.facebook.com/Vi%E1%BB%87c-L%C3%A0m-Ti%E1%BA%BFng-Nh%E1%BA%ADt-TPHCM-Vietseiko-105744628103928" target="_blank">Việc Làm Tiếng Nhật TPHCM</a>
                                </span>
                                <span>
                                   <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/Vi%E1%BB%87c-L%C3%A0m-Ti%E1%BA%BFng-Nh%E1%BA%ADt-TPHCM-Vietseiko-105744628103928;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=307551959318533" width="81" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                                </span>
                            </div>
                        </div>

                    </ul>

                    <ul class="footer-list">

                        <div class="page-facebook">
                            <div class="facebook_content">
                                <span>
                                    <a href="https://www.facebook.com/xuatkhaulaodongnhatbanVietseiko" target="_blank">Xuất Khẩu Lao Động Nhật Bản</a>
                                </span>
                                <span>
                                   <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FxuatkhaulaodongnhatbanVietseiko&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=307551959318533" width="81" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                                </span>
                            </div>
                        </div>

                    </ul>

                    <ul class="footer-list">

                        <div class="page-facebook">
                            <div class="facebook_content">
                                <span>
                                    <a href="https://www.facebook.com/VI%E1%BB%86C-L%C3%80M-TI%E1%BA%BENG-NH%E1%BA%ACT-TP-TH%E1%BB%A6-%C4%90%E1%BB%A8C-Vietseiko-107424611539511" target="_blank">Việc làm tiếng Nhật TP. Thủ Đức</a>
                                </span>
                                <span>
                                   <iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/VI%E1%BB%86C-L%C3%80M-TI%E1%BA%BENG-NH%E1%BA%ACT-TP-TH%E1%BB%A6-%C4%90%E1%BB%A8C-Vietseiko-107424611539511;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=307551959318533" width="81" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                                </span>
                            </div>
                        </div>

                    </ul>

                </div>

                <!----------------------------#2--------------------------------->

                <div class="footer-top-2 section" data-reveal>

                    <ul class="footer-list">

                        <li>
                            <a href="<?php echo base_url()?>gioi-thieu" class="footer-list-title border-1">GIỚI THIỆU</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>thu-ngo">Thư Ngỏ</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>ve-chung-toi">Về chúng tôi</a>

                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>tam-nhin">Tầm nhìn và sứ mệnh</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>nguyen-tac">Nguyên tắc</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>gia-tri">Những giá trị văn hóa</a>

                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>gia-tri-cot-loi">Giá trị cốt lõi</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>hinh-anh">Hình ảnh và video</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>so-do-cong-ty">Sơ đồ tổ chức công ty VietSeiko</a>

                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <a href="#" class="footer-list-title border-1">VIỆC LÀM CẦN TUYỂN</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="http://vieclamtiengnhat-hr.vietseiko.com">Việc Làm Trong Nước</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="https://tuyendungkysudinhat.vietseiko.com">Xuất Khẩu Lao Động Nhật Bản</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>viec-lam-vietseiko">Việc Làm Tại VietSeiKo</a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <a href="#" class="footer-list-title border-1">LĨNH VỰC HOẠT ĐỘNG</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>tu-van-gioi-thieu">Giới Thiệu Nhân Sự Trong Nước (HEADHUNTER)</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>gioi-thieu-ky-su">Giới Thiệu Kỹ Sư Và Xuất Khẩu Lao Động Nhật Bản</a>
                        </li>

                        <li class="footer-list-item">
                            <a href="<?php echo base_url()?>tu-van-xuc-tien">Tư Vấn Xúc Tiến Đầu Tư (DOANH NGHIỆP NHẬT BẢN)
                            </a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <a href="<?php echo base_url()?>headhunter-la-gi" class="footer-list-title border-1">HEADHUNTER</a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <a href="<?php echo base_url()?>tin-tuc" class="footer-list-title border-1">TIN TỨC</a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <a href="<?php echo base_url()?>lien-he" class="footer-list-title border-1">LIÊN HỆ</a>
                        </li>

                    </ul>

                    

                </div>

                <!----------------------------#2--------------------------------->

                <div class="footer-top-3 section" data-reveal>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">CÔNG TY TNHH VIETSEIKO</p>
                        </li>

                        <li>
                            <p class="footer-list-title">>> Văn phòng chính</p>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="location-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>

                                    <p>Số 108/17, Đường 79, Phường Tăng Nhơn Phú B, TP.Thủ Đức, TP.HCM</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="mail-unread-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Email:</span>
                                    <p>hello.quykhachhang@vietseiko.com</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="call-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Phone Number :</span>

                                    <p>(028) 3636.9996 - 0363.212.627</p>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">VĂN PHÒNG TẠI NHẬT BẢN</p>
                        </li>

                        <li>
                            <p class="footer-list-title">>> Văn phòng tại HIROSHIMA (広島)</p>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="location-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">日本の駐住事務所:</span>

                                    <p>広島県福山市神辺町 下御 領1332-5</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="mail-unread-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Email:</span>
                                    <p>hello.quykhachhang@vietseiko.com</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="call-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">担当者の電話番号:</span>

                                    <p>084-965-0831</p>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">VĂN PHÒNG TẠI NHẬT BẢN</p>
                        </li>

                        <li>
                            <p class="footer-list-title">>> Văn phòng tại TOKYO (東京)</p>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="location-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span"> 日本の駐住事務所:</span>

                                    <p>〒170-0013東京都豊島区 東池袋1丁目34番5号いちご東池袋ビル6階</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="mail-unread-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">Email:</span>
                                    <p>hello.quykhachhang@vietseiko.com</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="wrapper">
                                <ion-icon name="call-outline"
                                    aria-hidden="true"></ion-icon>

                                <div>
                                    <span class="span">担当者の電話番号:</span>

                                    <p>080-5401-5365</p>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                
            </div>

            <div class="footer-copyright">
                    <div class="footer-bottom" style="border-top: 1px solid; background-color: #0073b7;">

                        <p class="copyright">
                            <li><a style="float: left;color: white; padding-right: 200px; padding-left: 150px;" href="https://tuyendungkysudinhat.vietseiko.com"><ion-icon name="globe-outline"></ion-icon>xuatkhaulaodongnhatban.com</a></li>
                            <li><a style="color: white;float: left; padding-right: 200px;" href="http://vieclamtiengnhat-hr.vietseiko.com/"><ion-icon name="globe-outline"></ion-icon>vieclamtiengnhat.com</a></li>
                            <li><a style="color: white;" href="https://www.vietseiko.com"><ion-icon name="globe-outline"></ion-icon>www.vietseiko.com</a></li>
                        </p>
                    </div>
                </div>
        </footer>



 


<script type="text/javascript" src="<?php echo base_url()?>public/user/bootstrap/js/bootstrap.min.js"></script>
 <!-- 
    - ionicon link
  -->
        <script type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



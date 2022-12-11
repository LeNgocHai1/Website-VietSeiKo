<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['dang-nhap'] = 'admin/login/index';

$route['banner'] = 'admin/banner/index';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['calendar'] = 'admin/cal';
$route['quan-tri-vien'] = 'admin/admin';
$route['them-quan-tri-vien'] = 'admin/add';
$route['chinh-sua-quan-tri-vien'] = 'admin/edit';
$route['translate_uri_dashes'] = FALSE;
// $route['viec-lam/(:any)'] = 'user/news/detail/$1';
$route['post/(:any)'] = 'posts/details/$1';
// $route['viec-lam']  = 'user/news';
$route['chi-tiet']  ='user/news/detail';
$route['chi-tiet-gui-email']  ='user/news/sendEmail_detail';

$route['gioi-thieu'] = 'user/gioi_thieu';
$route['thu-ngo'] = 'user/thungo';
$route['ve-chung-toi'] = 'user/vechungtoi';
$route['tam-nhin'] = 'user/tamnhin';
$route['cam-nang']  = 'user/camnang';
$route['gia-tri']  = 'user/giatri';
$route['gia-tri-cot-loi']  = 'user/giatricotloi';
$route['cam-ket']  = 'user/camket';
$route['diem-manh']  = 'user/diemmanh';

$route['giay-phep']  = 'user/giayphep';
$route['giay-phep-kinh-doanh']  = 'user/giayphepkinhdoanh';
$route['cong-tac-vien']  = 'user/congtacvien';


$route['tu-van-gioi-thieu']  = 'user/tuvangioithieu';
$route['tu-van-xuc-tien']  = 'user/tuvanxuctien';
$route['tu-van-moi-gioi']  = 'user/tuvanmoigioi';
$route['tu-van-moi-gioi-detail-1']  = 'user/tuvanmoigioi_detail_1';
$route['gioi-thieu-ky-su']  = 'user/gioithieukysu';

$route['tu-van-bat-dong-san']  = 'user/tuvanbatdongsan';
$route['dich-vu-xin-giay-phep']  = 'user/dichvuxingiayphep';
$route['nguoi-tim-viec']  = 'user/nguoitimviec';
$route['viec-lam-gap']  = 'user/vieclamgap';
$route['viec-lam-gap/:num'] = "user/vieclamgap/index/$1";
$route['viec-lam-vietseiko']  = 'user/vieclamtaivietseiko';

$route['vi']    = 'admin/gioi_thieu';
// $route['viec-lam-tai-nhat-ban']    = 'user/vieclamtainhat';
// $route['viec-lam-tai-viet-nam']    = 'user/vieclamtaivietnam';
$route['tin-tuc']    = 'user/tintuc';
$route['tin-tuc/:num'] = "user/tintuc/index/$1";
$route['gioi-thieu']    = 'user/gioithieu';
$route['hinh-anh']    = 'user/hinhanh';
$route['nguyen-tac']    = 'user/nguyentac';
$route['nha-tuyen-dung']    = 'user/nhatuyendung';
$route['ung-tuyen']    = 'user/ungtuyen';

$route['news/(:any)/:num'] = 'user/news/$1';
$route['lien-he']    = 'user/lienhe';
//$route['nenkin']    = 'user/nenkin';
$route['dang-ky']    = 'user/customer';
$route['so-do-cong-ty'] = 'user/sodotochuc';
$route['headhunter-la-gi'] = 'user/headhunter';
?>
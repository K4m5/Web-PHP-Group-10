<?php
ob_start();
session_start();
include '../model/pdo.php';
include '../model/loaiphong.php';
include '../model/phong.php';
include '../model/hotro.php';
include '../model/datphong.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include 'header.php';

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'ourrooms':
            if (isset($_GET['idlp'])) {
                $id = $_GET['idlp'];
                $listlp = loadall_loaiphong_ourrooms();
                $listpcungloai = load_phongview_cungloai($id);
            } else {
                $listpcungloai = loadall_phong();
                $listlp = loadall_loaiphong_ourrooms();
            }
            include "our-rooms.php";
            break;
        case 'dining':
            include "dining.php";
            break;
        case 'about':
            include "about.php";
            break;
        case 'home':
            $error = array();
            $data = array();
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $ngaydat = $_POST['ngayden'];
                $ngaytra = $_POST['ngaytra'];
                $data['ngayden'] = isset($_POST['ngayden']) ? $_POST['ngayden'] : '';
                $data['ngaytra'] = isset($_POST['ngaytra']) ? $_POST['ngaytra'] : '';
                if (empty($data['ngayden'])) {
                    $error['ngayden'] = 'Vui lòng nhập ngày đến';
                } else {
                    if ($data['ngayden'] >= $data['ngaytra']) {
                        $error['ngayden'] = 'Ngày đặt phải nhỏ ngày trả';
                    }
                }
                if (empty($data['ngaytra'])) {
                    $error['ngaytra'] = 'Vui lòng nhập ngày trả';
                } else if ($data['ngayden'] >= $data['ngaytra']) {
                    $error['ngaytra'] = 'Ngày trả phải lớn hơn ngày đặt';
                }
                if (!$error) {
                    $datphongs = loadall_phongdadat();
                    foreach ($datphongs as $datphong) {
                        if (($ngaydat < $datphong['ngayden'] && $ngaytra === $datphong['ngayden']) || ($ngaytra > $datphong['ngaytra'] && ($ngaydat === $datphong['ngaytra']))) {
                            $listpchuadat = loadall_phongchuadat();
                        } else if ((($ngaydat < $datphong['ngayden'] && $ngaytra > $datphong['ngaytra'])) || ($ngaydat > $datphong['ngayden'] && $ngaytra > $datphong['ngaytra'])) {
                            $listpchuadat = loadall_phongchuadat();
                        } else if (($ngaydat === $datphong['ngayden'] && $ngaytra === $datphong['ngaytra'])) {
                            $listpchuadat = loadall_phongchuadat1($ngaydat, $ngaytra);
                            $listpdadat = loadall_phongdadat2($ngaydat, $ngaytra);
                        } else if ($ngaydat === $datphong['ngayden'] || $ngaytra === $datphong['ngaytra']) {
                            $listpchuadat = loadall_phongchuadat2($ngaydat, $ngaytra);
                        } else if ($ngaydat > $datphong['ngayden'] && $ngaytra < $datphong['ngaytra']) {
                            $listpchuadat = loadall_phongchuadat3($ngaydat, $ngaytra);
                        } else if ((($ngaydat > $datphong['ngayden'] && $ngaydat < $datphong['ngaytra']) && $ngaytra > $datphong['ngaytra']) || ($ngaydat < $datphong['ngayden'] && ($ngaytra > $datphong['ngayden'] && $ngaytra < $datphong['ngaytra']))) {
                            $listpchuadat = loadall_phongchuadat();
                        }
                    }
                }
            }
            include "home.php";
            break;
        case 'contact':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $name_user = $_POST['name_user'];
                $tel = $_POST['tel'];
                $ghichu = $_POST['ghichu'];
                if (preg_match('/^[0-9]{10}+$/', $tel)) {
                    insert_hotro($name_user, $tel, $ghichu);
                    $thongbao = "Gửi thành công!";
                } else {
                    $errtel = "Nhập số điện thoại không hợp lệ";
                }
            }
            include "contact.php";
            break;
        case 'booknow':
            include "booking-now.php";
            break;
        case 'deluxe':
            include "deluxe-room.php";
            break;
        case 'room':
            $id = $_GET['id'];
            $room = loadone_phong($id);
            $listbl = load_binhluan($id);
            $sql = "select * from datphong where id_phong=$id";
            $datphongs = pdo_query($sql);
            $error = array();
            $data = array();
            if (isset($_POST['datphong']) && ($_POST['datphong'])) {
                $ngayden = $_POST['ngayden'];
                $ngaytra = $_POST['ngaytra'];
                $data['ngayden'] = isset($_POST['ngayden']) ? $_POST['ngayden'] : '';
                $data['ngaytra'] = isset($_POST['ngaytra']) ? $_POST['ngaytra'] : '';
                if (empty($data['ngayden'])) {
                    $error['ngayden'] = 'Vui lòng nhập ngày đến';
                } else {
                    if ($data['ngayden'] >= $data['ngaytra']) {
                        $error['ngayden'] = 'Ngày đặt phải nhỏ ngày trả';
                    }
                }
                if (empty($data['ngaytra'])) {
                    $error['ngaytra'] = 'Vui lòng nhập ngày trả';
                } else if ($data['ngayden'] >= $data['ngaytra']) {
                    $error['ngaytra'] = 'Ngày trả phải lớn hơn ngày đặt';
                }
                if (!$error) {
                    $check = true;
                    foreach ($datphongs as $dp) {
                        if (($dp['ngayden'] === $ngayden && $dp['ngaytra'] === $ngaytra) || (($ngayden >= $dp['ngayden'] && $ngayden <= $dp['ngaytra']) && $ngaytra >= $dp['ngaytra']) || (($ngaytra >= $dp['ngayden'] && $ngaytra <= $dp['ngaytra']) && $ngayden <= $dp['ngayden'])) {
                            $check = false;
                        } else if ($ngayden > $dp['ngayden'] && $dp['ngaytra'] < $ngaytra) {
                            $check = true;
                        }
                    }
                    if ($check == false) {
                        $thongtin = "Đặt Phòng Thất Bại.Vui lòng đặt ngày khác!!!";
                    } else if ($check == true) {
                        $id_user = $_SESSION['user']['id_user'];
                        $sokhach = $_POST['sokhach'];
                        $price = $room['price'];
                        $id_phong = $room['id_phong'];
                        $datefirst = strtotime($_POST['ngayden']);
                        $dateout = strtotime($_POST['ngaytra']);
                        $datediff = abs($datefirst - $dateout);
                        $songay = floor($datediff / (60 * 60 * 24));
                        $tongtien = $songay * $price;
                        $giaodich = '';
                        $format_tongtien = number_format($tongtien);
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date('d/m/Y h:i:s a', time());
                        $date2 = date('d/m/Y h:i:s a', time());
                        insert_datphong($id_phong, $id_user, $sokhach, $ngayden, $ngaytra, $tongtien, $giaodich);
                        $thongbao = "Đặt Phòng Thành Công.Vui lòng thanh toán!!!";
                    }
                }
            }
            include "room.php";
            break;
        case 'thanhtoan':
            $idp = $_GET['idp'];
            $sql = "select * from datphong where id_phong = $idp";
            $dp = pdo_query_one($sql);
            $idorder = $dp['id_order'];
            $tongtien = $dp['tongtien'];
            echo '<pre>';
            var_dump($_SESSION['idorder']);
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                header("location: http://localhost/DUAN1/vnpay_php/index.php?idorder=$idorder");
            }
            include "room.php";
            break;
            // case 'hoadon':

            //     include 'vnpay_php/index.php';
            //     break;
        case 'binhluan':
            $iduser = $_POST['iduser'];
            $idroom = $_POST['idroom'];
            $noidung = $_POST['comment'];
            $date = getdate();
            $ngaybinhluan = $date['year'] . "/" . $date['mon'] . "/" . $date['mday'];
            insert_binhluan($noidung, $iduser, $ngaybinhluan, $idroom);
            header("location:http://localhost/duan1/view/index.php?act=room&id=$idroom");
            break;
        case 'suabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }
            include "taikhoan/update.php";
            break;
        case 'updatebl':
            $id = $_GET['idbl'];
            $noidung = $_POST['comment'];
            $idroom = $_POST['idroom'];
            update_binhluan($id, $noidung);
            $thongbao = "Cập nhật thành công!";
            header("location:http://localhost:/duan1/view/index.php?act=room&id=$idroom");
            break;
        case 'xoabl':
            $idroom = $_GET['idp'];
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            // $listbl = load_binhluan($id);
            header("location:http://localhost/duan1/view/index.php?act=room&id=$idroom");
            break;
        case 'tk':
            include "taikhoan/info.php";
            break;
            // sua lai dang ki
        case 'capnhat':
            $id = $_POST['id'];
            $user = $_POST['user'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            // echo $id, $user, $password, $email, $address, $tel;
            $update = update_taikhoan($id, $user, $password, $email, $address, $tel);
            $info = loadone_taikhoan($id);

            if (isset($_SESSION['user'])) {
                $_SESSION['user'] = $info;
            }
            $thongbao = "Cập nhật thành công!";
            header("location:./info.php");
            break;
        case 'thoat':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }

            include "home.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include 'footer.php';
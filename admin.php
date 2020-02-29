<?php
include "model/pdo.php";
include "model/qlloaihang.php";
include "model/qlhanghoa.php";
include "model/qlkhachhang.php";
include "model/qlbinhluan.php";
include "global.php";

include "view/admin/header.php";
if (isset($_GET['act']) && $_GET['act']) {
    switch ($_GET['act']) {
        case 'loaihang':
            if (isset($_POST['them'])) {
                //$id = $_POST['id'];
                // không cần id vì trong db, id tự tăng
                $ten_lh = $_POST['ten_lh'];
                add_loaihang($ten_lh);
            }

            if (isset($_GET['xoa']) && $_GET['xoa'] > 0) {
                del_loaihang($_GET['xoa']);
            }

            if(isset($_POST['update'])&& $_POST['update']){
                $ma_lh = $_POST['ma_lh'];
                $ten_lh =  $_POST['ten_lh'];
                update_loaihang($ma_lh, $ten_lh);
            }
            
            if(isset($_GET['sua'])&& ($_GET['sua'] > 0)){
                $detail = get_loaihang($_GET['sua']);
            }
            $ds_loaihang = show_loaihang(0);
            include "view/admin/loaihang.php";
        break;

        case 'khachhang':
            if (isset($_POST['them'])) {
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $hinh = $_FILES['hinh']['name'];
                $email = $_POST['email'];
                $vai_tro = $_POST['vai_tro'];
                $kich_hoat = $_POST['kich_hoat'];
                $target_file = "view/imgup/";
                move_uploaded_file($_FILES["hinh"]['name'], $target_file);
                add_khachhang($ma_kh, $mat_khau, $ho_ten, $hinh, $email, $vai_tro, $kich_hoat);
            }

            if (isset($_GET['xoa']) && $_GET['xoa'] > 0) {
                del_khachhang($_GET['xoa']);
            }


            $ds_khachhang = show_khachhang(0);
            include "view/admin/khachhang.php";
        break;

        case 'hanghoa':
            if (isset($_POST['them'])) {
                //$id = $_POST['id'];
                // không cần id vì trong db, id tự tăng
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $hinh = $_FILES['hinh']['name'];
                $ngay_nhap = $_POST['ngay_nhap'];
                $mo_ta = $_POST['mo_ta'];
                $luot_xem = $_POST['luot_xem'];
                $ma_lh =$_POST['ma_lh'];
                $target_file = "view/imgup/";
                move_uploaded_file($_FILES["hinh"]['name'], $target_file);
                add_hanghoa($ten_hh, $don_gia, $hinh, $ngay_nhap, $mo_ta, $luot_xem, $ma_lh);
            }

            if (isset($_GET['xoa']) && $_GET['xoa'] > 0) {
                del_hanghoa($_GET['xoa']);
            }


            $ds_hanghoa = show_hanghoa(0);
            include "view/admin/hanghoa.php";
        break;

        case 'binhluan':
            if (isset($_POST['them'])) {
                //$id = $_POST['id'];
                // không cần id vì trong db, id tự tăng
                $content = $_POST['content'];
                $id_hh = $_POST['id_hh'];
                $id_kh = $_POST['id_kh'];
                $time = $_POST['time'];
                add_binhluan($content, $id_hh, $id_kh, $time );
            }

            if (isset($_GET['xoa']) && $_GET['xoa'] > 0) {
                del_binhluan($_GET['xoa']);
            }
            $ds_binhluan = show_binhluan(0);
            include "view/admin/binhluan.php";
        break;

        default:
            include "view/admin/home.php";
            break;
    }
} else {
    include "view/admin/home.php";
}

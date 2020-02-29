<?php
function show_khachhang($home)
{
  global $conn;
  $sql = "SELECT * FROM khachang WHERE 1";
  if ($home == 1) {
    $sql .= " AND home=1";
  }
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  return $result;
}

function add_khachhang($ma_kh, $mat_khau, $ho_ten, $hinh, $email, $vai_tro, $kich_hoat)
{
  global $conn;
  //viết câu truy vấn theo mysql
  $sql = "INSERT INTO `streetgang`.`khachang` (`ma_kh`, `mat_khau`, `ho_ten`, `hinh`, `email`, `vai_tro`, `kich_hoat`) 
  VALUES ('$ma_kh', '$mat_khau', '$ho_ten', '$hinh', '$email', '$vai_tro', '$kich_hoat')";
  $conn->exec($sql);
  // header điều hướng về trang ban đầu sau khi thêm xong
  header("Location: admin.php?act=khachhang");
}

function del_khachhang($ma_kh)
{
  global $conn;
  $sql = "DELETE FROM `streetgang`.`khachang` WHERE `khachang`.`ma_kh` = " . $ma_kh;
  $conn->exec($sql);
  // header điều hướng về trang trước sau khi xóa
  header("Location: admin.php?act=khachhang");
  // if(is_array($ma_loai)){
  //     foreach ($ma_loai as $ma) {
  //         pdo_execute($sql, $ma);
  //     }
  // }
  // else{
  //     pdo_execute($sql, $ma_loai);
  // }
}


?>
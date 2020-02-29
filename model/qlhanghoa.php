<?php
function show_hanghoa($home)
{
  global $conn;
  $sql = "SELECT * FROM hanghoa WHERE 1";
  if ($home == 1) {
    $sql .= " AND home=1";
  }
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  return $result;
}

function add_hanghoa($ten_hh, $don_gia, $hinh, $ngay_nhap, $mo_ta, $luot_xem, $ma_lh)
{
  global $conn;
  //viết câu truy vấn theo mysql
  $sql = "INSERT INTO `streetgang`.`hanghoa` (`ten_hh`, `don_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `luot_xem`, `ma_lh`) 
  VALUES ('$ten_hh', '$don_gia', '$hinh', '$ngay_nhap', '$mo_ta', '$luot_xem', '$ma_lh')";
  $conn->exec($sql);
  // header điều hướng về trang ban đầu sau khi thêm xong
  header("Location: admin.php?act=hanghoa");
}

function del_hanghoa($ma_hh)
{
  global $conn;
  $sql = "DELETE FROM `streetgang`.`hanghoa` WHERE `hanghoa`.`ma_hh` = " . $ma_hh;
  $conn->exec($sql);
  // header điều hướng về trang trước sau khi xóa
  header("Location: admin.php?act=hanghoa");
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
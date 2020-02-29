<?php
function show_loaihang($home)
{
  global $conn;
  $sql = "SELECT * FROM loaihang WHERE 1";
  if ($home == 1) {
    $sql .= " AND home=1";
  }
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  return $result;
}

function add_loaihang($ten_lh)
{
  global $conn;
  //viết câu truy vấn theo mysql
  $sql = "INSERT INTO `streetgang`.`loaihang` (`ten_lh`) VALUES ('$ten_lh')";
  $conn->exec($sql);
  // header điều hướng về trang ban đầu sau khi thêm xong
  header("Location: admin.php?act=loaihang");
}

function del_loaihang($ma_lh)
{
  global $conn;
  $sql = "DELETE FROM `streetgang`.`loaihang` WHERE `loaihang`.`ma_lh` = " . $ma_lh;
  $conn->exec($sql);
  // header điều hướng về trang trước sau khi xóa
  header("Location: admin.php?act=loaihang");
  // if(is_array($ma_loai)){
  //     foreach ($ma_loai as $ma) {
  //         pdo_execute($sql, $ma);
  //     }
  // } else {
  //     pdo_execute($sql, $ma_loai);
  // }
}

function update_loaihang($ma_lh, $ten_lh){
  global $conn;
  $sql = "UPDATE loaihang SET ten_lh = 'ten_lh' WHERE ma_lh= ".$ma_lh;
  $stmt = $conn->prepare($sql);
  // // execute the query
  $stmt->execute();
  header("Location: admin.php?act=loaihang");
}

function get_loaihang($ma_lh){
  global $conn;
  $sql = " select * from loaihang where ma_lh=" .$ma_lh;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetch();
  return $result;
  header("Location: admin.php?act=loaihang&sua=".$ma_lh);

}


?>

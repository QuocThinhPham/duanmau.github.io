<?php
function show_binhluan($home)
{
  global $conn;
  $sql = "SELECT * FROM binhluan WHERE 1";
  if ($home == 1) {
    $sql .= " AND home=1";
  }
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $stmt->fetchAll();
  return $result;
}

function add_binhluan($content, $id_hh, $id_kh, $time)
{
  global $conn;
  //viết câu truy vấn theo mysql
  $sql = "INSERT INTO `streetgang`.`binhluan` (`content`, `id_hh`, `id_kh`, `time`) VALUES ('$content', '$id_hh', '$id_kh', '$time')";
  $conn->exec($sql);
  // header điều hướng về trang ban đầu sau khi thêm xong
  header("Location: admin.php?act=binhluan");
}

function del_binhluan($id)
{
  global $conn;
  $sql = "DELETE FROM `streetgang`.`binhluan` WHERE `binhluan`.`id` = " . $id;
  $conn->exec($sql);
  // header điều hướng về trang trước sau khi xóa
  header("Location: admin.php?act=binhluan");
  // if(is_array($ma_loai)){
  //     foreach ($ma_loai as $ma) {
  //         pdo_execute($sql, $ma);
  //     }
  // }
  // else{
  //     pdo_execute($sql, $ma_loai);
  // }
}

// function update_cata($id, $name, $img, $price, $more){
//   global $conn;
//   $sql = "UPDATE `shop` SET `name` = '$name', `img` = '$img', `price` = '$price', `more` = '$more' WHERE `shop`.`id` = '$id'";
//   $stmt = $conn->prepare($sql);
//   // execute the query
//   $stmt->execute();
//   header("Location: admin.php?act=shop");
// }

// function get_hanghoa($id){
//   global $conn;
//   $sql = " select * from shop where id=" .$id;
//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   $result = $stmt->fetch();
//   return $result;
//   header("Location: admin.php?act=shop&sua=".$id);

// }


?>
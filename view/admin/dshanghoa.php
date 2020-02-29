<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<section id="ds_loai">
      <div class="container-fluid">
        <!-- <form action="" method="post"> -->
        <h5 class="text-success text-center">DANH SÁCH LOẠI HÀNG HÓA</h5><p></p>
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Loại sản phẩm</th>
            <th>Hình ảnh</th>
            <!-- <th>Link sản phẩm</th> -->
            <th>Chức năng</th>
          </tr>
          <?php
          // khai báo biến đếm để STT vì mã sản phẩm có thể rất lớn
          $i = 1;
          foreach ($ds as $item) {
            //<td>' . $item['id'] . '</td>
            if($item['img']!=""){
              $hinh="<img <img src='view/imgup/".$item['img']."' width='100px'>";
            }else{
              $hinh="";
            }
            echo  '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $item['name'] . '</td>
                    <td>' . $item['price'] . '</td>
                    <td>' . $item['more'] . '</td>
                    <td>' . $hinh . '</td>
                    <td>
                    <a href="admin.php?act=shop&sua=' . $item['id'] . '"><input type="button" value="Sửa" name="sua" class="btn btn-info btn-sm"></a> 
                    <a href="admin.php?act=shop&xoa=' . $item['id'] . '"><input type="button" value="Xóa" name="xoa" class="btn btn-danger btn-sm"></a> 
                    </td>
                  </tr>';
          }
          ?>

        </table>
        <!-- </form> -->
      </div>
    </section>
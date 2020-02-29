<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
  form {
    width: 1200px;
    margin: auto;
  }

  p {
    height: 30px;
  }
</style>

<body>
    <div class="conteiner-fluid">
        <p></p> <h1 class="text-center text-success">QUẢN LÝ HÀNG HÓA</h1><p></p>
        <form class="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
            <input type="text" name="ten_hh" class="form-control" placeholder="Nhập tên hàng hóa">
            </div>
            <div class="col">
            <input type="text" name="don_gia" class="form-control" placeholder="Nhập giá hàng hóa">
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col">
            <input type="file" name="hinh"  class="form-control" placeholder="Nhập ảnh hàng hóa">
            </div>
            <div class="col">
            <input type="date" name="ngay_nhap"  class="form-control" placeholder="Nhập ngày nhập">
            </div>
        </div><p></p>
        <div class="row">
            <div class="col">
            <input type="text" name="mo_ta"  class="form-control" placeholder="Nhập mô tả hàng hóa">
            </div>
            <div class="col">
            <input type="text" name="luot_xem"  class="form-control" placeholder="Nhập lượt xem hàng hóa">
            </div>
        </div><p></p>
        <div class="row">
            <div class="col">
            <input type="text" name="ma_lh"  class="form-control" placeholder="Nhập mã loại hàng hóa">
            </div>
            <!-- <div class="col">
            <input type="text" name="luot_xem"  class="form-control" placeholder="Nhập lượt xem hàng hóa">
            </div> -->
        </div><p></p>

        <div class="row">
            <div class="col">
            <button type="submit" name="them" class="btn btn-success mb-2">Thêm</button>
            </div>
        </div>
        </form>
    </div><p></p><hr><p></p> 
    
    <section id="ds_hanghoa">
      <div class="container-fluid">
        <!-- <form action="" method="post"> -->
        <h5 class="text-success text-center">DANH SÁCH HÀNG HÓA</h5><p></p>
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>Mã hàng hóa</th>
            <th>Tên hàng hóa</th>
            <th>Giá hàng hóa</th>
            <th>Hình ảnh</th>
            <th>Ngày Nhập</th>
            <th>Mô tả</th>
            <th>Lượt xem</th>
            <th>Mã loại</th>
            <th>chức năng</th>
          </tr>
          <?php
          // khai báo biến đếm để STT vì mã sản phẩm có thể rất lớn
          $i = 1;
          foreach ($ds_hanghoa as $item) {
            //<td>' . $item['id'] . '</td>
            if($item['hinh']!=""){
              $hinh="<img <img src='view/imgup/".$item['hinh']."' width='100px'>";
            }else{
              $hinh="";
            }
            $hh="HH";
            echo  '<tr>
                    <td>' .$hh. $i++ . '</td>
                    <td>' . $item['ten_hh'] . '</td>
                    <td>' . $item['don_gia'] . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $item['ngay_nhap'] . '</td>
                    <td>' . $item['mo_ta'] . '</td>
                    <td>' . $item['luot_xem'] . '</td>
                    <td>' . $item['ma_lh'] . '</td>
                    <td>
                    <a href="admin.php?act=hanghoa&sua=' . $item['ma_hh'] . '"><input type="button" value="Sửa" name="sua" class="btn btn-info btn-sm"></a> 
                    <a href="admin.php?act=hanghoa&xoa=' . $item['ma_hh'] . '"><input type="button" value="Xóa" name="xoa" class="btn btn-danger btn-sm"></a> 
                    </td>
                  </tr>';
          }
          ?>

        </table>
        <!-- </form> -->
      </div>
    </section>

</body>
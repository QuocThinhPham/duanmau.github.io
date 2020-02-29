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
    <div class="container-fluid">
        <p></p> <h1 class="text-center text-success">QUẢN LÝ KHÁCH HÀNG</h1><p></p>
        <form class="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
            <input type="text" name="ma_kh" class="form-control" placeholder="Nhập mã khách hàng">
            </div>
            <div class="col">
            <input type="text" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu">
            </div>
        </div><p></p>
        <div class="row">
            <div class="col">
            <input type="text" name="ho_ten"  class="form-control" placeholder="Nhập họ tên khách hàng">
            </div>
            <div class="col">
            <input type="file" name="hinh"  class="form-control" placeholder="Nhập hình ảnh đại diện">
            </div>
        </div><p></p>
        <div class="row">
            <div class="col">
            <input type="text" name="email"  class="form-control" placeholder="Nhập Email khách hàng">
            </div>
            <div class="col">
            <input type="text" name="vai_tro"  class="form-control" placeholder="Nhập vai trò">
            </div>
        </div><p></p>
        <div class="row">
            <div class="form-check">
            <input type="checkbox" name="kich_hoat" class="form-check-input" value="Kích hoạt">
            <label for="exampleCheck1">Kích hoạt</label><br>
            <input type="checkbox" name="kich_hoat" class="form-check-input" value="Chưa kích hoạt">
            <label for="exampleCheck1">Chưa kích hoạt</label>
            </div>
        </div><p></p>
        <div class="row">
            <div class="col">
            <button type="submit" name="them" class="btn btn-success mb-2">Thêm</button>
            </div>
        </div>
        </form>
    </div><p></p> <hr> <p></p>

    <section id="ds_khachhang">
      <div class="container-fluid">
        <!-- <form action="" method="post"> -->
        <h5 class="text-success text-center">DANH SÁCH KHÁCH HÀNG</h5><p></p>
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>Mã Khách Hàng</th>
            <th>Mật Khẩu</th>
            <th>Họ Tên</th>
            <th>Hình Ảnh</th>
            <th>Mail</th>
            <th>Vai Trò</th>
            <th>Kích Hoạt</th>
            <th>Chức năng</th>
          </tr>
          
          <?php
          // khai báo biến đếm để STT vì mã sản phẩm có thể rất lớn
          $i = 1;
          foreach ($ds_khachhang as $item) {
            //<td>' . $item['id'] . '</td>
            if($item['hinh']!=""){
              $hinh="<img <img src='view/imgup/".$item['hinh']."' width='100px'>";
            }else{
              $hinh="";
            }
            echo  '<tr>
                    <td>' . $item['ma_kh'] . '</td>
                    <td>' . $item['mat_khau'] . '</td>
                    <td>' . $item['ho_ten'] . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $item['email'] . '</td>
                    <td>' . $item['vai_tro'] . '</td>
                    <td>' . $item['kich_hoat'] . '</td>
                    <td>
                    <a href="admin.php?act=khachhang&sua=' . $item['ma_kh'] . '"><input type="button" value="Sửa" name="sua" class="btn btn-info btn-sm"></a> 
                    <a href="admin.php?act=khachhang&xoa=' . $item['ma_kh'] . '"><input type="button" value="Xóa" name="xoa" class="btn btn-danger btn-sm"></a> 
                    </td>
                  </tr>';
          }
          ?>

        </table>
        <!-- </form> -->
      </div>
    </section>
</body>
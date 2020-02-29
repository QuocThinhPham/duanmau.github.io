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
        <p></p> <h1 class="text-center text-success">QUẢN LÝ BÌNH LUẬN</h1><p></p>
        <form class="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
            <input type="text" name="content" class="form-control" placeholder="Nhập nội dung ">
            </div>
            <div class="col">
            <input type="text" name="id_hh" class="form-control" placeholder="Mã hàng hóa">
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col">
            <input type="text" name="id_kh"  class="form-control" placeholder="Mã khách hàng">
            </div>
            <div class="col">
            <input type="text" name="time"  class="form-control" placeholder="Thời gian">
            </div>
        </div><p></p>

        <div class="row">
            <div class="col">
            <button type="submit" name="them" class="btn btn-success mb-2">Thêm</button>
            </div>
        </div>
        </form>
    </div><p></p><hr><p></p> 

    <section id="ds_binhluan">
      <div class="container-fluid">
        <!-- <form action="" method="post"> -->
        <h5 class="text-success text-center">DANH SÁCH BÌNH LUẬN</h5><p></p>
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>Mã bình luận</th>
            <th>Nội dung</th>
            <th>Mã hàng hóa</th>
            <th>Mã khách hàng</th>
            <th>Thời gian</th>
            <th>chức năng</th>
          </tr>
          <?php
          // khai báo biến đếm để STT vì mã sản phẩm có thể rất lớn
          $i = 1;
          foreach ($ds_binhluan as $item) {
            $bl="BL";
            echo  '<tr>
                    <td>' .$bl . $i++ . '</td>
                    <td>' . $item['content'] . '</td>
                    <td>' . $item['id_hh'] . '</td>
                    <td>' . $item['id_kh'] . '</td>
                    <td>' . $item['time'] . '</td>
                    <td>
                    <a href="admin.php?act=binhluan&sua=' . $item['id'] . '"><input type="button" value="Sửa" name="sua" class="btn btn-info btn-sm"></a> 
                    <a href="admin.php?act=binhluan&xoa=' . $item['id'] . '"><input type="button" value="Xóa" name="xoa" class="btn btn-danger btn-sm"></a> 
                    </td>
                  </tr>';
          }
          ?>

        </table>
        <!-- </form> -->
      </div>
    </section>

</body>
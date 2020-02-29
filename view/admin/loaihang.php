<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<style>
  form {
    width: 1200px;
    margin: auto;
  }

  p {
    height: 30px;
  }
</style>
<!-- </head> -->

<body>
  <div class="container-fluid">
    <P></P><h1 class="text-center text-success">QUẢN LÝ LOẠI HÀNG</h1><p></p>
    <?php
      if(isset($_GET['sua'])&& ($_GET['sua']) > 0){
    ?>

    <form class="form" action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input type="text" name="ten_lh" value='<?=$detail['ten_lh']; ?>' class="form-control">
        </div>
      </div><p></p>
      <button type="submit" name="update" class="btn btn-success mb-2">Update</button>
      <input type="hidden" name="ma_lh" value='<?=$detail['ma_lh']; ?>'>
    </form>

    <?php  }else{ ?> 

      <form class="form" action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input type="text" name="ten_lh" class="form-control" placeholder="Nhập Loại hàng hóa">
        </div>
      </div><p></p>
      <div class="row">
        <div class="col">
          <button type="submit" name="them" class="btn btn-success mb-2">Thêm</button>
        </div>
      </div>
    </form>

    <?php  }?><p></p><hr><p></p>

    <section id="ds_loaihang">
      <div class="container-fluid">
        <!-- <form action="" method="post"> -->
        <h5 class="text-success text-center">DANH SÁCH LOẠI HÀNG HÓA</h5><p></p>
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>Mã hàng hóa</th>
            <th>Tên loại hàng</th>
            <th>Chức năng</th>
          </tr>
          <?php
          // khai báo biến đếm để STT vì mã sản phẩm có thể rất lớn
          $i = 1;
          foreach ($ds_loaihang as $item) {
            //<td>' . $item['id'] . '</td>
            // $lh="LH";
            echo  '<tr>
                    <td>' . $item['ma_lh']. '</td>
                    <td>' . $item['ten_lh'] . '</td>
                    <td>
                    <a href="admin.php?act=loaihang&sua=' . $item['ma_lh'] . '"><input type="button" value="Sửa" name="sua" class="btn btn-info btn-sm"></a> 
                    <a href="admin.php?act=loaihang&xoa=' . $item['ma_lh'] . '"><input type="button" value="Xóa" name="xoa" class="btn btn-danger btn-sm"></a> 
                    </td>
                  </tr>';
          }
          ?>

        </table>
        <!-- </form> -->
      </div>
    </section>
  </div>
  <!--container-->
</body>

</html>
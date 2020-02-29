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
        width: 1000px;
        margin: auto;
        border: solid 1px #ffc300;
        padding: 20px;
        border-radius: 15px;
        background-color: #f5f5f5;
    }

    p {
        height: 30px;
    }
    label{
        font-size: 20px
    }
    button{
        width: 200px;
        font-size: 30px;
        margin-left: 40%
    }
    h1{
        color: #f9a825
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <p></p><h1 class="text-center">Đăng Ký Tài Khoản</h1><p></p>
        <form action="">
            <div class="form-group">
                <label for="">Tên đăng nhập:</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập họ và tên:">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu:</label>
                <input type="text" name="pass" class="form-control" placeholder="Nhập mật khẩu:">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập email:">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện:</label>
                <input type="file" name="name" class="form-control" placeholder="Chọn ảnh:">
            </div><p></p>
            <div class="form-group">
            <button type="submit" name="them" class="btn btn-warning btn-lg">Registration</button>
            </div>
        </form>
    </div><p></p>
</body>
</html>
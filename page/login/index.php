<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="container1">
                <h1>Trang đăng nhập</h1>
               <form action="#" method="POST">
                <table>
                    <tr>
                        <td><label  for="">Tên đăng nhập: </label></td>
                        <td> <input name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td><label for="">Mật khẩu: </label></td>
                        <td><input name="pass" type="password"></td>
                    </tr>
                    
                </table>
                <button name="btnDN" type="submit">Đăng nhập</button>
                <button type="reset">Nhập lại</button>
                </form>
        </div>
</body>
</html>
<?php
if(isset($_REQUEST['btnDN'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['pass'];
    $obj = new database();
    $idTK =  $obj->kiemtradangnhap($username,$password);
    if($idTK){
        $_SESSION['dangnhap']= $idTK;
        echo"đăng nhập thành công";
    }else{
        echo"đăng nhập thất bại!";
    }
}


?>
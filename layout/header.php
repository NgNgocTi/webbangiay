<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css?v=2">
</head>
<body>
    <div class="header">
      <div class="nav">

    
      <ul>
        <li><a href="sanpham.html">Sản Phẩm</a></li>

        <?php
        $obj = new database();
        $sql = "select * from loaisanpham";
        $result = $obj->xuatdulieu($sql);
        for($i=0;$i<count($result);$i++){
          echo"<li><a href='index.php?page=sanpham&cate=".$result[$i]['maLoaiSP']."'>".$result[$i]['tenLoaiSP']."</a></li>";
        }
        
        ?>
      </ul>    
      </div>
      <div class="nav2">
        <ul>
          <li><a href="login.html">Đăng nhập</a></li>
          <li><a href="">Đăng kí</a></li>
          <li><a href="index.php?page=logout">Đăng xuất</a></li>
          <li><a href="admin.html">Quản lí</a></li>
        </ul>
      </div>  

    </div>
    <div class="body">
<!-- 
<div class='hinh'>
  <img src="../upload/img/" alt='' width='200px'>
</div> -->
<div class="addPro">
    <a href="index.php?page=addPro">Thêm sản phẩm</a>

</div>
<?php

$obj = new database();
$sql = "select * from sanpham";
$values=  $obj->xuatdulieu($sql);
if(isset($_SESSION['dangnhap'])){
    echo"<table>
    <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mã loại</th>
            <th>Giới thiệu</th>
            <th>Chức năng</th>

        </tr>
    </thead>
    <tbody>";
    for($i=0;$i<count($values);$i++){
        echo"<tr>
        <td>".$values[$i]['maSP']."</td>
        <td>".$values[$i]['tenSP']."</td>
        <td><img src='./upload/img/".$values[$i]['hinhAnh']."' width='200px'></td>
        <td>".number_format($values[$i]['giaSP'])."đ</td>
        <td>".$values[$i]['maLoaiSP']."</td>
        <td>".$values[$i]['gioiThieu']."</td>
        <td><a name='btnXoa' href='index.php?page=admin&masp=".$values[$i]['maSP']."'>Xóa</a>|<a href='index.php?page=editPro&masp=".$values[$i]['maSP']."'>Sửa</a></td>
        </tr>";
    }
    echo"</tbody>
    </table>";
}else{
    header("Location: index.php?page=login");
}

if(isset($_REQUEST['masp'])){
    $idSP = $_REQUEST['masp'];
    $obj->xoadulieu($idSP);

}
?>


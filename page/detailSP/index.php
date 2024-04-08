<?php
if(isset($_GET['idsp'])){
    $idsp = $_GET['idsp'];
    $sql = "select * from sanpham where maSP =". $idsp;
}
$obj = new database();
$values = $obj->xuatdulieu($sql);
if($values){
echo"<div class='detailSP'>";


    echo"<div class='imgPro'> 
        <div class='img'>
        <img src='upload/img/".$values[0]['hinhAnh']."' alt=''width='70px' height ='70px' >
        </div>
        <div class='img'>
        <img src='upload/img/".$values[0]['hinhAnh']."' alt=''width='70px' height ='70px' >
        </div>
        <div class='img'>
        <img src='upload/img/".$values[0]['hinhAnh']."' alt=''width='70px' height ='70px' >
        </div>
        <div class='img'>
        <img src='upload/img/".$values[0]['hinhAnh']."' alt=''width='70px' height ='70px' >
        </div>
    </div>";
    echo"<div class='hinh'><img src='upload/img/".$values[0]['hinhAnh']."' alt=''width='500px' height ='500px' ></div>
    <div class='infor'>   
        <h1>".$values[0]['tenSP']."</h1>
        <p>Mã SP:  <label>".$values[0]['maSP']."</label></p>
        <h3>".number_format($values[0]['giaSP'])."đ</h3>
        <button id='btnAdd'>Thêm vào giỏ hàng</button>
        <button id='btnAdd'>Mua ngay</button>
        <p>Hoặc đặt mua: <label>0987881729</label> (Tư vấn miễn phí)</p>
        <i class='fa-brands fa-facebook'></i>
    </div>";
echo"</div></div>";

echo"<div class='gioiThieu'>
".$values[0]['gioiThieu']."

</div>";
}

?>
<i class="fa-solid fa-download"></i>



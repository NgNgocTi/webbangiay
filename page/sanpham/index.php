<div class="search">
  <h3>Tìm kiếm sản phẩm: </h3>
  <input type="text">
</div>
<?php
$obj = new database();
if($cate){
  $sql = 'select * from sanpham where maLoaiSP ='. $cate;

}
else{
  $sql = 'select * from sanpham ';

}
$sanpham = $obj->xuatdulieu($sql);

if($sanpham){
  echo"<div class='container'>";
  for($i=0; $i<count($sanpham);$i++){
    echo"<div class='sanpham'><div class='sanphamchild'>
    <div class='hinh'><img src='./upload/img/".$sanpham[$i]['hinhAnh']."' alt='' width='200px' height: '70px' ></div>
    <div class='tensp'><a href='index.php?page=detailsp&idsp=".$sanpham[$i]['maSP']."'>".$sanpham[$i]['tenSP']."</a></div>
    <div class='gia'><p>". number_format($sanpham[$i]["giaSP"]) ."đ</p></div>
    </div></div>";
  }
  
  echo"</div>";
}

?>
<p></p>

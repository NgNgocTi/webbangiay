
<?php
// $obj = new database();
if(isset($_REQUEST['masp'])){
    $masp = $_REQUEST['masp'];
}
$sql  ="select * from sanpham where maSP = '$masp'";
$result = $obj->xuatdulieu($sql);

?>

<div class="container1">
                <h1>Sửa sản phẩm</h1>
               <form action="#" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label  for="">Tên sản phẩm: </label></td>
                        <?php
                        if($result){
                        echo"<td> <input name='username' value='".$result[0]['tenSP']."' type='text'></td>";
                        

                        }
                        ?>
                    </tr>
                    <tr>
                        <td><label for="">Loại: </label></td>
                        <?php
                        // $obj = new database();
                        $sql = "select * from loaisanpham";
                        $values = $obj->xuatdulieu($sql);
                        echo"<td><select name='maloai' id=''> ";
                        for($i=0;$i<count($values);$i++){
                           echo" <option value='".$values[$i]['maLoaiSP']."'>".$values[$i]['tenLoaiSP']."</option>";
                        }
                        echo"</select></td>";
                        ?>
                     
                        <select name="" id="">

                        <option value=''></option>
                        </select>
                    </tr>
                    <tr>
                        <td>Hình ảnh: </td>
                        <td><input name='hinh' type='file'> </td>
                    </tr>
                    <tr>
                        <td>Giá: </td>
                        <?php
                        echo"<td><input name='gia' value='".$result[0]['giaSP']."' type='number'> </td>";
                        
                        
                        ?>
                    </tr>
                    <tr>
                        <td>Giới thiệu: </td>
                        <?php
                        echo"<td><input name='gioithieu' value='".$result[0]['gioiThieu']."' type='text'> </td>";
                        
                        
                        ?>
                        
                    </tr>
                    
                </table>
                <button name="btnEdit" type="submit">Sửa sản phẩm</button>
                <button type="reset">Nhập lại</button>
                </form>
        </div>
        <?php
        if(isset($_REQUEST['masp'])){
            $masp =$_REQUEST['masp'];
        }
        $username = $_REQUEST['username'];
        $maloai = $_REQUEST['maloai'];
        $path = rand(100,200) .'_'. basename($_FILES['hinh']['name']);
        $file = "./upload/img/";
        $target_file = $file . $path;
        move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
        $gia = $_REQUEST['gia'];
        $gioithieu = $_REQUEST['gioithieu'];
        if(isset($_REQUEST['btnEdit'])){
          $result=  $obj->editdulieu($username,$maloai,$path,$gia,$gioithieu,$masp);
          if($result){
            header("Location: admin.html");
          }
        }
        
        ?>
       
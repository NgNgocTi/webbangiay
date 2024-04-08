<?php
class database{
    public function connect(){
        $conn = new mysqli('127.0.0.1:3307', 'root','','webbangiay');
        if($conn->errno){
            echo'Kết nối thất bại';
            exit();
        }else{
            return $conn;
        }
    }
    public function xuatdulieu($sql){
        $arr = array();
        $link = $this->connect();
        $result = $link->query($sql);
        if($result->num_rows)
        {
            while($row=$result->fetch_assoc())
                $arr[]=$row;
            return $arr;
        }
        else
            return 0;
    }
    public function kiemtradangnhap($name,$pass){
        $sql = "select * from taikhoan where tenTK = '$name' and password = '$pass'" ;
        $link = $this->connect();
        $result = $link->query($sql);
        if($result->num_rows){
            $row=$result->fetch_assoc();
            return $row["idTK"];
        }else{
            return 0;
        }
    }
    public function xoadulieu($id){
        $sql = "delete from sanpham where maSP = $id";
       $link = $this->connect();
       if($link->query($sql)){
        return 1;
    }
        else{
            return 0;
        }

    }
   
    public function themdulieu($name,$loai,$hinh,$gia,$gioithieu){
        $sql = "insert into sanpham(tenSP,maLoaiSP,hinhAnh,giaSP,gioiThieu ) values('$name','$loai','$hinh','$gia','$gioithieu')";
        $link = $this->connect();
        $result = $link->query($sql);
        if($result){
            echo"Thêm sản phẩm mới thành công";
        }
    }
    public function editdulieu($name,$loai,$hinh,$gia,$gioithieu,$id){
        $sql  = "update sanpham set tenSP = '$name',maLoaiSP = '$loai',hinhAnh = '$hinh',giaSP = '$gia',gioiThieu = '$gioithieu' where maSP = '$id'";
        $link = $this->connect();
        $result = $link->query($sql);
        if($result){
            echo"Sửa sản phẩm thành công!";
            echo" <script>
            alert('sửa thành công');
        </script>";
        
        }else{
            echo" <script>
            alert('sửa không thành công');
        </script>";
        }
    }


}

?>
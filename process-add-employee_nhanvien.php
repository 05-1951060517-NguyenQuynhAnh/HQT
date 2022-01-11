<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaNV= $_POST['txtMaNV'];
    $Hoten = $_POST['txtHoten'];
    $Ngaysinh=$_POST['txtNgaysinh'];
    $Gioitinh=$_POST['txtGioitinh'];
   
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO tbnhanvien (MaNV,TenNV,Ngaysinh,Gioitinh) VALUES('$MaNV','$Hoten','$Ngaysinh','$Gioitinh')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: nhanvien.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>
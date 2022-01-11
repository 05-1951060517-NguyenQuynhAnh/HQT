<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaK = $_POST['txtMaK'];
    $Hoten = $_POST['txtHoten'];
    $Diachi = $_POST['txtDiachi'];
    $Sđt = $_POST['txtSđt'];
     
    $conn = mysqli_connect('localhost','root','','qlcuahang');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO tbkhachhang (MaK,Hoten,Diachi,Sđt) VALUES('$MaK','$Hoten','$Diachi','$Sđt')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: khachhang.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>